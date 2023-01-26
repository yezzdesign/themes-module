<x-themes::nav class="sticky top-0 z-50 px-4 py-2 flex flex-col md:flex-row items-baseline justify-between lg:text-2xl border-b-2 border-prime_brand bg-prime_bg {{ $class ?? '' }}">

    <x-themes::logo.navigation href="{{ $href ?? route('frontend.index') ?? '#' }}" src="{{ $src ?? '' }}"
        class="flex flex-row w-full justify-between">
        <x-themes::menu.hamburger />
    </x-themes::logo.navigation>

    <div id="menu" class="w-full">
        <ul class="text-central_font text-2xl lg:text-4xl flex flex-col md:flex-row md:justify-between items-baseline">
            {{ $slot }}
        </ul>
    </div>

</x-themes::nav>
