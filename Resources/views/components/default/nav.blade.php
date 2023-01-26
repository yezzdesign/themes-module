<x-themes::default.navigation
    class="hidden md:block"
    id="navigation">

    {{-- Normal Menu --}}
    <x-frontendap::navigation.item
            href="/#team"
            class="hidden md:block">
            {{ __('frontendap::frontend.navigation.aboutme') }}
        </x-frontendap::navigation.item>

        <x-frontendap::navigation.item
            :href="route('frontend.blog')"
            class="hidden md:block">
            {{ __('frontendap::frontend.navigation.books') }}
        </x-frontendap::navigation.item>

    <div id="navigation-brand">
        <div class="flex ">
            <span class="text-2xl">
                <span class="text-prime_brand">A</span>lex <span class="text-prime_brand">P</span>udlich
            </span>
        </div>
    </div>

        <x-frontendap::navigation.item
            :href="route('frontend.booklist')"
            class="hidden md:block">
            {{ __('frontendap::frontend.navigation.short') }}
        </x-frontendap::navigation.item>

        <x-frontendap::navigation.item
            :href="route('frontend.booklist')"
            class="hidden md:block">
            Blog
        </x-frontendap::navigation.item>

</x-themes::default.navigation>

<x-themes::default.navigation.small class="md:md:hidden" id="menu">

<ul>
    {{-- Normal Menu --}}
    <li>
    <x-frontendap::navigation.item
        href="/#team"
        class="md:hidden block">
        {{ __('frontendap::frontend.navigation.aboutme') }}
    </x-frontendap::navigation.item>
    </li>

    <li>
    <x-frontendap::navigation.item
        :href="route('frontend.blog')"
        class="md:hidden block">
        {{ __('frontendap::frontend.navigation.books') }}
    </x-frontendap::navigation.item>
    </li>


    <li>
    <x-frontendap::navigation.item
        :href="route('frontend.booklist')"
        class="md:hidden block">
        {{ __('frontendap::frontend.navigation.short') }}
    </x-frontendap::navigation.item>
    </li>

    <li>
    <x-frontendap::navigation.item
        :href="route('frontend.booklist')"
        class="md:hidden block">
        Blog
    </x-frontendap::navigation.item>
    </li>
</ul>
</x-themes::default.navigation.small>
