@php
    $iconColor = $color ?? '#10B981';
@endphp
@switch($icon)
    @case('play')
        <svg class="w-5 h-5" fill="{{ $iconColor }}" viewBox="0 0 20 20"><path d="M6.3 2.841A1.5 1.5 0 004 4.11v11.78a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/></svg>
        @break
    @case('sparkles')
        <svg class="w-5 h-5" fill="{{ $iconColor }}" viewBox="0 0 20 20"><path d="M5 2a1 1 0 011 1v2a1 1 0 11-2 0V3a1 1 0 011-1zM10 2a1 1 0 011 1v8a1 1 0 11-2 0V3a1 1 0 011-1zM15 2a1 1 0 011 1v4a1 1 0 11-2 0V3a1 1 0 011-1z"/></svg>
        @break
    @case('video')
        <svg class="w-5 h-5" fill="none" stroke="{{ $iconColor }}" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
        @break
    @case('crown')
        <svg class="w-5 h-5" fill="{{ $iconColor }}" viewBox="0 0 20 20"><path d="M2 4l3 6 5-7 5 7 3-6v12H2V4z"/></svg>
        @break
    @case('robot')
        <svg class="w-5 h-5" fill="none" stroke="{{ $iconColor }}" stroke-width="2" viewBox="0 0 24 24"><rect x="4" y="8" width="16" height="12" rx="2"/><path d="M12 2v6M8 14h.01M16 14h.01M9 18h6"/></svg>
        @break
    @case('film')
        <svg class="w-5 h-5" fill="none" stroke="{{ $iconColor }}" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M7 4v16M17 4v16M2 8h5M2 16h5M17 8h5M17 16h5"/></svg>
        @break
    @case('heart')
        <svg class="w-5 h-5" fill="{{ $iconColor }}" viewBox="0 0 20 20"><path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/></svg>
        @break
    @case('spark-heart')
        <svg class="w-5 h-5" fill="{{ $iconColor }}" viewBox="0 0 20 20"><path d="M10 18l-1.45-1.32C3.4 12.36 0 9.28 0 5.5 0 2.42 2.42 0 5.5 0 7.24 0 8.91.81 10 2.09 11.09.81 12.76 0 14.5 0 17.58 0 20 2.42 20 5.5c0 3.78-3.4 6.86-8.55 11.18L10 18z"/></svg>
        @break
    @case('music')
        <svg class="w-5 h-5" fill="none" stroke="{{ $iconColor }}" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18V5l12-2v13M9 18a3 3 0 11-6 0 3 3 0 016 0zM21 16a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        @break
    @case('star')
        <svg class="w-5 h-5" fill="{{ $iconColor }}" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.05 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.05 2.927z"/></svg>
        @break
    @case('vr')
        <svg class="w-5 h-5" fill="none" stroke="{{ $iconColor }}" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="10" rx="3"/><circle cx="8" cy="12" r="1.5" fill="{{ $iconColor }}"/><circle cx="16" cy="12" r="1.5" fill="{{ $iconColor }}"/></svg>
        @break
    @case('camera')
        <svg class="w-5 h-5" fill="none" stroke="{{ $iconColor }}" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9a2 2 0 012-2h2l2-3h6l2 3h2a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><circle cx="12" cy="13" r="3"/></svg>
        @break
    @case('flag')
        <svg class="w-5 h-5" fill="{{ $iconColor }}" viewBox="0 0 20 20"><path d="M3 3a1 1 0 011-1h12a1 1 0 01.96 1.28L15.42 7l1.54 3.72A1 1 0 0116 12H5v6a1 1 0 11-2 0V3z"/></svg>
        @break
    @default
        <svg class="w-5 h-5" fill="{{ $iconColor }}" viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/></svg>
@endswitch
