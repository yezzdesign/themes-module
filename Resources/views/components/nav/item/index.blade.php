<li class="{{ $class ?? '' }}" id="{{ $id ?? '' }}">
    <x-themes::a href="{{ $href ?? '#' }}" hreflang="{{ $hreflang ?? 'en' }}" referrerpolicy="{{ $referrerpolicy ?? 'origin' }}" target="{{ $target ?? '_self' }}" rel="{{ $rel ?? 'next' }}" class="{{ $aclass ?? '' }}">
        {{ $slot }}
    </x-themes::a>
</li>
