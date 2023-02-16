<x-themes::div class="{{ $class ?? '' }}" id="{{ $id ?? 'text_prime'}}">
    <x-themes::text.prime_title_small>
        {!! $title !!}
    </x-themes::text.prime_title_small>
    {{ $slot }}
</x-themes::div>
