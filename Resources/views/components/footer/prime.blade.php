<x-themes::divide.prime/>

<x-themes::footer class="{{ $heightclass ?? 'my-6' }}">

    <x-themes::div class="flex flex-row justify-around text-sm md:text-lg items-baseline text-gray-400">

        <x-themes::div id="footer_copyright">
            <x-themes::footer.item>
                {{ $copyslot ?? ('&copy; ' . (config('acp.website_author') ?? 'Yezz.Design') . ', - 2023') }}
            </x-themes::footer.item>
        </x-themes::div>

        <x-themes::div id="footer_links" class="flex justify-between divide-x">
            {{ $slot }}
        </x-themes::div>

    </x-themes::div>

</x-themes::footer>
