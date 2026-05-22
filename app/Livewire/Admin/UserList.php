<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserList extends Component
{
    public bool $showForm = false;
    public ?int $editingId = null;

    #[Validate('required|string|max:120')]
    public string $name = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('nullable|min:8')]
    public string $password = '';

    public function startCreate(): void
    {
        $this->reset(['editingId', 'name', 'email', 'password']);
        $this->showForm = true;
    }

    public function startEdit(int $id): void
    {
        $user = User::findOrFail($id);
        $this->editingId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = '';
        $this->showForm = true;
    }

    public function save(): void
    {
        $rules = [
            'name' => 'required|string|max:120',
            'email' => 'required|email|max:255|unique:users,email'.($this->editingId ? ','.$this->editingId : ''),
            'password' => $this->editingId ? 'nullable|min:8' : 'required|min:8',
        ];
        $this->validate($rules);

        $data = ['name' => $this->name, 'email' => $this->email];
        if ($this->password) {
            $data['password'] = Hash::make($this->password);
        }

        if ($this->editingId) {
            User::find($this->editingId)->update($data);
            session()->flash('status', 'Kullanıcı güncellendi.');
        } else {
            User::create($data);
            session()->flash('status', 'Kullanıcı oluşturuldu.');
        }
        $this->showForm = false;
        $this->reset(['editingId', 'name', 'email', 'password']);
    }

    public function delete(int $id): void
    {
        if ($id === auth()->id()) {
            session()->flash('status', 'Kendinizi silemezsiniz.');
            return;
        }
        User::findOrFail($id)->delete();
        session()->flash('status', 'Kullanıcı silindi.');
    }

    #[Layout('layouts.admin')]
    #[Title('Kullanıcılar')]
    public function render()
    {
        return view('livewire.admin.user-list', [
            'users' => User::latest()->get(),
        ]);
    }
}
