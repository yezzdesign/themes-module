<x-themes::nav class="{{ $class ?? '' }}" id="{{ $id ?? 'navigation' }}">
    <ul class="{{ $ulclass ?? 'list-none' }}" id="{{ $ulid ?? 'ul_navigation' }}">
        {{ $slot }}
    </ul>
</x-themes::nav>
