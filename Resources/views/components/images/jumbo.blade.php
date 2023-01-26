<x-themes::div id="{{ $headId ?? 'jumbo_image' }}" class="{{ $headClass ?? '' }}">
    <x-themes::img.prime src="{{ $imgSrc }}"
         alt="{{ $imgAlt }}"
         class="grayscale hover:filter-none w-screen transition-all duration-3000 border rounded-sm{{ $imgClass ?? 'border-gray-500' }}" />
</x-themes::div>
