<?php

namespace App\Livewire\Admin;

use App\Models\LinkExchange;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class LinkExchangeList extends Component
{
    use WithPagination;

    #[Url(as: 'status')]
    public string $statusFilter = '';

    public function updating($name): void
    {
        if ($name === 'statusFilter') {
            $this->resetPage();
        }
    }

    public function approve(int $id): void
    {
        LinkExchange::findOrFail($id)->update([
            'status' => 'verified',
            'verified_at' => now(),
        ]);
        session()->flash('status', 'Başvuru onaylandı.');
    }

    public function reject(int $id): void
    {
        LinkExchange::findOrFail($id)->update(['status' => 'rejected']);
        session()->flash('status', 'Başvuru reddedildi.');
    }

    public function markBroken(int $id): void
    {
        LinkExchange::findOrFail($id)->update([
            'status' => 'broken',
            'last_checked_at' => now(),
        ]);
        session()->flash('status', 'Link kırık olarak işaretlendi.');
    }

    public function delete(int $id): void
    {
        LinkExchange::findOrFail($id)->delete();
        session()->flash('status', 'Başvuru silindi.');
    }

    #[Layout('layouts.admin')]
    #[Title('Link Değişimleri')]
    public function render()
    {
        $rows = LinkExchange::query()
            ->when($this->statusFilter, fn ($q) => $q->where('status', $this->statusFilter))
            ->latest()
            ->paginate(25);

        return view('livewire.admin.link-exchange-list', ['rows' => $rows]);
    }
}
