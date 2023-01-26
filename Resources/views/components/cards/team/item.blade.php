<x-themes::div id="{{ $cardId ?? 'card' }}" class="flex flex-col md:flex-row items-center pt-16 {{ $cardClass ?? '' }}">
    <x-themes::img.prime src="{{ $cardImageSrc }}" alt="{{ $cardImageAlt ?? 'image_alt' }}" class="rounded-full {{ $cardImageClass ?? '' }}" />
    <x-themes::div class="md:pl-16">
        <x-themes::text.prime title="{{ $cardContentTitle ?? 'Title' }}">
            <x-themes::text.item>{{ $cardContentText ?? 'Content Text' }}</x-themes::text.item>
        </x-themes::text.prime>
    </x-themes::div>
</x-themes::div>
