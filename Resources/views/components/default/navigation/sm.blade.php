<div id="navigation" class="
    sticky top-0 z-50
    py-6
    bg-prime_bg
    {{ $class ?? '' }}">

    <div id="navigation-brand" class="flex justify-around items-baseline">
        <div class="">
            <p class="text-2xl border rounded-full border-prime_brand p-3 hover:bg-prime_brand/50">
                <span class="text-prime_brand">A</span>lex <span class="text-prime_brand">P</span>udlich
            </p>
        </div>
        <div>
            {{-- Hamburger Menu --}}
            <svg xmlns="http://www.w3.org/2000/svg" id="{{ $id ?? 'menu' }}-button" class="h-6 w-6 cursor-pointer md:hidden inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </div>
    </div>


    {{-- Menu --}}
    <div id="{{ $id ?? 'menu' }}" class="flex justify-around text-2xl py-4">
        {{ $slot }}
    </div>
</div>

<div class="-mt-40"></div>

<x-themes::default.navigation
    class="
    sticky top-10 z-50
    border border-prime_brand
    bg-prime_bg/90
    shadow-lg
    rounded-xl
    m-8 p-4

    {{ $class ?? '' }}">

    <div id="menu" class="flex justify-around text-lg items-center font-bold">
        {{ $slot }}
    </div>

</x-themes::default.navigation>
