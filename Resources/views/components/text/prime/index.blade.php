<x-themes::div class="{{ $class ?? '' }}" id="{{ $id ?? 'text_prime'}}">
    <x-themes::text.prime_title class="{{ $titleClass ?? '' }}">
        {{ $title }}
    </x-themes::text.prime_title>
    <x-themes::p.prime class="{{ $contentClass ?? '' }}">
        {{ $slot }}
    </x-themes::p.prime>
</x-themes::div>
