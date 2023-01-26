<li class="hoverable hidden md:block {{ $class ?? '' }}">

    {{-- Menu Name --}}
    <x-themes::a.prime rel="">{{ $name ?? 'Menu' }}</x-themes::a.prime>

    {{-- Mega Content --}}
    <div class="mega-menu mb-0 shadow shadow-prime_brand bg-prime_bg border border-prime_brand rounded-sm">
        <div class="container mx-auto w-full flex justify-between mx-2">
                {{ $slot }}
        </div>
    </div>
</li>
