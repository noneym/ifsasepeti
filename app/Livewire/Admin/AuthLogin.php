<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AuthLogin extends Component
{
    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required|min:6')]
    public string $password = '';

    public bool $remember = false;

    public function mount()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
    }

    public function login()
    {
        $this->validate();

        $key = 'login:'.request()->ip();
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            $this->addError('email', "Çok fazla deneme. {$seconds} saniye sonra tekrar deneyin.");
            return null;
        }

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::hit($key, 60);
            $this->addError('email', 'E-posta veya şifre yanlış.');
            return null;
        }

        RateLimiter::clear($key);
        request()->session()->regenerate();

        return redirect()->intended(route('admin.dashboard'));
    }

    #[Layout('layouts.admin')]
    #[Title('Yönetim Girişi')]
    public function render()
    {
        return view('livewire.admin.auth-login');
    }
}
