<div class="{{ $class ?? 'flex' }}" id="{{ $id ?? 'navigation_brand' }}">
    <div><x-themes::a href="{{ $href ?? '#' }}">
        @isset( $src )
            @empty( $src )
                <span class="text-prime_brand text-6xl">{{ config('app.name') }}</span>
            @else
                <img src="{{ $src }}" alt="" class="mx-auto h-10 lg:h-20 px-2">
            @endempty
        @endisset
    </x-themes::a>
    </div>
    {{ $slot }}
</div>
