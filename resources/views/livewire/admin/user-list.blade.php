<div>
    @section('page_title', 'Kullanıcılar')

    <div class="flex items-center justify-between mb-4">
        <p class="text-sm text-ifsa-muted">Toplam {{ $users->count() }} kullanıcı</p>
        <button wire:click="startCreate"
                class="inline-flex items-center px-4 py-2 rounded-lg bg-gradient-to-r from-ifsa-yellow via-ifsa-orange to-ifsa-red text-white font-bold text-sm shadow-sm hover:opacity-90">
            + Yeni Kullanıcı
        </button>
    </div>

    @if ($showForm)
        <div class="card p-5 mb-4 border-ifsa-orange">
            <h2 class="font-bold mb-3">{{ $editingId ? 'Kullanıcı Düzenle' : 'Yeni Kullanıcı' }}</h2>
            <form wire:submit="save" class="space-y-3">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold mb-1.5">Ad Soyad</label>
                        <input wire:model="name" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                        @error('name') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-xs font-bold mb-1.5">E-posta</label>
                        <input wire:model="email" type="email" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                        @error('email') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold mb-1.5">
                        Şifre {{ $editingId ? '(boş bırakırsanız değişmez)' : '' }}
                    </label>
                    <input wire:model="password" type="password" class="w-full sm:w-1/2 rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                    @error('password') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div class="flex gap-2">
                    <button type="submit" class="px-4 py-2 rounded-lg bg-gradient-to-r from-ifsa-yellow via-ifsa-orange to-ifsa-red text-white font-bold text-sm">
                        Kaydet
                    </button>
                    <button type="button" wire:click="$set('showForm', false)" class="px-4 py-2 rounded-lg border border-ifsa-border text-sm font-semibold">İptal</button>
                </div>
            </form>
        </div>
    @endif

    <div class="card overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-ifsa-bg/60 text-xs uppercase tracking-wider text-ifsa-muted">
                <tr>
                    <th class="text-left px-4 py-3 font-bold">Ad</th>
                    <th class="text-left px-2 py-3 font-bold">E-posta</th>
                    <th class="text-left px-2 py-3 font-bold">Kayıt</th>
                    <th class="text-right px-4 py-3 font-bold">İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $u)
                    <tr class="border-t border-ifsa-border hover:bg-ifsa-bg/40">
                        <td class="px-4 py-3 font-semibold">
                            {{ $u->name }}
                            @if ($u->id === auth()->id())
                                <span class="ml-1 inline-flex px-1.5 py-0.5 rounded bg-ifsa-orange/10 text-ifsa-orange text-[10px] font-bold">SEN</span>
                            @endif
                        </td>
                        <td class="px-2 py-3 text-ifsa-muted">{{ $u->email }}</td>
                        <td class="px-2 py-3 text-xs text-ifsa-muted">{{ $u->created_at->format('d.m.Y') }}</td>
                        <td class="px-4 py-3 text-right">
                            <button wire:click="startEdit({{ $u->id }})" class="text-ifsa-orange hover:underline text-xs font-semibold mr-3">Düzenle</button>
                            @if ($u->id !== auth()->id())
                                <button wire:click="delete({{ $u->id }})"
                                        wire:confirm="“{{ $u->name }}” silinsin mi?"
                                        class="text-rose-600 hover:underline text-xs font-semibold">Sil</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
