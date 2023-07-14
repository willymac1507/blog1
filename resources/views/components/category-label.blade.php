@props([
    'category'
])

<div {{ $attributes->class(['space-x-2']) }}>
    <a href="/categories/{{ $category->slug }}"
       class="px-3 py-1 border rounded-full text-xs uppercase font-semibold border-blue-300 text-blue-300"
       style="font-size: 10px">{{ $category->name }}</a>
</div>
