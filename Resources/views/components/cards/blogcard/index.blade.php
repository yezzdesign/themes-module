<div class="">
    <!--Card 1-->
    <div class="w-full lg:flex lg:justify-center">
        <div class="w-full bg-white/5 hover:bg-white/10 border-prime_font_border_color border-2 rounded-t-lg lg:rounded-t-none lg:rounded-l-lg px-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <p class="text-sm text-prime_font_color flex items-center pl-8 pt-8">
                    <svg class="fill-current text-prime_font_color w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                    </svg>
                    categorys: {{ $categories ?? '#rezension #books' }}
                </p>
                <x-themes::text.prime.easy
                    head-class="p-8 text-lg lg:text-2xl"
                    title-class="break-all"
                    content-class="break-all">
                    <x-slot:titleContent>
                        <x-themes::a href="{{ $cardHref ?? '#' }}">
                            {{ $titleContent ?? '' }}
                        </x-themes::a>
                    </x-slot:titleContent>
                    <x-slot:content>
                        {{ $content }}
                        <x-themes::p><x-themes::a.prime href="{{ $cardHref ?? '#' }}" class="text-gray-500">{{ $blogRead ?? __('frontendjbc::blog.read') }}</x-themes::a.prime></x-themes::p>
                    </x-slot:content>
                </x-themes::text.prime.easy>
            </div>
            <div class="flex flex-col md:flex-row items-center justify-between lg:justify-start mx-8 px-16 py-4 border-prime_font_border_color border-t">
                        <div class="flex flex-row items-center">
                            <div class="flex-none w-10 lg:w-20 h-10 lg:h-20">
                                <x-themes::img.prime class="w-10 lg:w-20 h-10 lg:h-20 rounded-full flex-none" src="{{ $writerSrc }}" alt="Avatar of Writer" />
                            </div>

                            <div class="mx-4 whitespace-nowrap">
                                <p class="text-prime_brand text-base">{{ $writerName ?? 'Julia' }}</p>
                                <p class="text-prime_font_color text-base">{{ \Carbon\Carbon::parse( $writerDate ?? now() )->locale(config('app.locale'))->translatedFormat('d F Y') }}</p>
                            </div>
                        </div>

                <div class="flex items-center mt-4 md:mt-0 pt-1">
                    <div class=""><p><x-themes::a.prime href="{{ $linkFb ?? '#' }}"><i class="fa-brands fa-facebook"></i></x-themes::a.prime></p></div>
                    <div class=""><p><x-themes::a.prime href="{{ $linkAmz ?? '#' }}"><i class="fa-brands fa-amazon"></i></x-themes::a.prime></p></div>
                    <div class=""><p><x-themes::a.prime href="{{ $linkTwitter ?? '#' }}"><i class="fa-brands fa-twitter"></i></x-themes::a.prime></p></div>
                    <div class=""><p><x-themes::a.prime href="{{ $linkInst ?? '#' }}"><i class="fa-brands fa-instagram"></i></x-themes::a.prime></p></div>
                </div>
            </div>
        </div>

        <div class="h-64 lg:h-auto lg:w-2/6 flex-none bg-cover bg-center bg-no-repeat rounded-b-lg lg:rounded-b-none lg:rounded-r-lg text-center overflow-hidden border-2 border-t-0 lg:border-t-2 lg:border-l-0 border-prime_font_border_color" style="background-image: url({{ $blogCover ?? '' }})" title="blog_image">
        </div>

    </div>
</div>
