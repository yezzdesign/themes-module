<x-themes::div id="{{ $headId ?? 'cards' }}" class="{{ $headDivClass ?? '' }}">

    <x-themes::text.prime.easy title-content="{{ $titleHead ?? 'Last Blogs' }}" content="{{ $titleContent ?? 'Here you can find the last BlogPosts' }}"/>

    <x-themes::div class="">
        {{ $slot }}
    </x-themes::div>
</x-themes::div>
