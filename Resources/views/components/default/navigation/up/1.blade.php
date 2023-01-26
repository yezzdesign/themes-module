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
