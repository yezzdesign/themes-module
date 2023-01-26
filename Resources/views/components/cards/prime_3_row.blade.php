{{-- 3 row cards --}}
<x-themes::div id="{{ $headId ?? 'cards_3_row' }}" class="{{ $headDivClass ?? '' }}">

    <x-themes::text.prime.easy title-content="{{ $titleHead ?? 'Last Blogs' }}" content="{{ $titleContent ?? 'Here you can find the last BlogPosts' }}"/>

    <x-themes::div class="flex flex-col space-y-4 md:flex-row md:space-y-0 md:space-x-4">
        {{ $slot }}
    </x-themes::div>
</x-themes::div>
