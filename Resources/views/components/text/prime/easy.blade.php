<x-themes::text.prime
    class="{{ $headClass ?? '' }}"
    id="{{ $headId ?? 'text_prime' }}"
    title-class="{{ $titleClass ?? '' }}"
    title="{!! $titleContent ?? 'Titel'  !!}"
    content-class="{{ $contentClass ?? '' }}" >
    {{ $content ?? 'Content' }}
</x-themes::text.prime>
