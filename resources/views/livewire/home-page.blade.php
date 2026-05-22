<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
        @foreach ($categories as $category)
            <livewire:category-card :category="$category" :key="'cat-'.$category->id" />
        @endforeach
    </div>
</div>
