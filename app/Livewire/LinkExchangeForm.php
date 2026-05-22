<?php

namespace App\Livewire;

use App\Models\LinkExchange;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LinkExchangeForm extends Component
{
    #[Validate('required|string|max:120')]
    public string $partner_name = '';

    #[Validate('required|url|max:255')]
    public string $partner_url = '';

    #[Validate('nullable|url|max:255')]
    public string $partner_back_url = '';

    #[Validate('nullable|email|max:120')]
    public string $contact_email = '';

    #[Validate('nullable|string|max:1000')]
    public string $notes = '';

    public bool $submitted = false;

    public function submit(): void
    {
        $data = $this->validate();

        LinkExchange::create(array_merge($data, ['status' => 'pending']));

        $this->reset(['partner_name', 'partner_url', 'partner_back_url', 'contact_email', 'notes']);
        $this->submitted = true;
    }

    public function render()
    {
        return view('livewire.link-exchange-form');
    }
}
