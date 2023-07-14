<x-dropdown>
    <x-slot:trigger>
        <button
            class="bg-gray-100 rounded-t-xl lg:inline-flex relative w-full flex text-left lg:flex-1 py-2 pl-3 pr-9 text-sm font-semibold"
            :class="!show && 'rounded-xl'"
        >
            {{ isset($currentCategory) ? $currentCategory->name : 'Categories' }}
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
        </button>
    </x-slot:trigger>

    <x-dropdown-link href='/' :active="request()->routeIs('home')">All</x-dropdown-link>

    @foreach($categories as $category)
        <x-dropdown-link href="?category={{ $category->slug }}"
                         :active='request()->is("?category={$category->slug}")'
        >
            {{  ucwords($category->name) }}
        </x-dropdown-link>
    @endforeach
</x-dropdown>
