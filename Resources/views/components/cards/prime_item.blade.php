<x-themes::cards
    src="{{ $cardImage }}">

    <x-slot:title>
        <x-themes::a href="{{ $cardHref ?? '#' }}">{{ $cardTitle }}</x-themes::a>
    </x-slot:title>

    <x-slot:smalltitle>
        <span class="hover:text-prime_brand text-justify word-break leading-relaxed">{{ $cardAuthorName ?? 'Author' }}</span> - {{ \Carbon\Carbon::parse( $cardAuthorDate ?? now() )->locale(config('app.locale'))->translatedFormat('d F Y') }}
    </x-slot:smalltitle>
    <x-themes::text.item class="text-2xl text-justify word-break leading-relaxed">
        {{ $cardContent ?? 'Content' }}
    </x-themes::text.item>
    <x-themes::text.item class="text-2xl">
        <x-themes::a.prime href="{{ $cardHref ?? '#' }}" class="text-gray-500">{{__('frontendjbc::blog.read')}}</x-themes::a.prime>
    </x-themes::text.item>
</x-themes::cards>
