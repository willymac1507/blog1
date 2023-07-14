@props(['trigger'])
<div x-data="{ show: false }" @click.outside="show=false" class="w-full">
    {{-- TRIGGER --}}
    <div @click="show = !show">
        {{ $trigger }}
    </div>

    {{-- DROPDOWN LINKS --}}
    <div x-show="show"
         class="py-2 lg:w-32 lg:absolute bg-gray-100 rounded-b-xl z-0 overflow-auto max-h-52">
        {{ $slot }}
    </div>
</div>
