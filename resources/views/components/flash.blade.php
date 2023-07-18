@if (session()->has('success'))
    <div
        x-data="{ show:true }"
        x-init="setTimeout(() => show = false, 3000)"
        x-show="show"
        {{ $attributes->class(['fixed bottom-3 right-3 bg-green-500 text-white text-sm py-2 px-4 rounded-md']) }}>
        <p>
            {{ session('success') }}
        </p>
    </div>
@endif
