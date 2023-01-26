{{--
|--------------------------------------------------------------------------
| ## Design App
|--------------------------------------------------------------------------
|
| ## Generate the Design for these specific App
|
| Here you can find the Design/Layout of the App.
| Copy and paste it and change all the details
|
| @author:  YezzDesign
| @mail:    yezz.design@schodie.de
|
--}}

<x-themes::default.master

    {{-- Title is "Title - Modelname"
    |--------------------------------------------------- --}}
    title="{{ $title ?? 'WebsiteName' }}"

    {{-- Tailwind Design Classes for the first container
    |--------------------------------------------------- --}}
    class="
        antialiased
        text-prime_font_color
        font-prime_font
        bg-prime_bg
        text-3xl
        {{ $class ?? '' }}">

    {{-- CSS Styles
    |--------------------------------------------------- --}}
    <x-slot:style>
         @vite('Modules/' . basename(Module::getModulePath('Themes')) .'/Resources/assets/css/themes.css')
    </x-slot:style>

    {{-- JS for App
    |--------------------------------------------------- --}}
    <x-slot:script>
        @vite('Modules/' . basename(Module::getModulePath('Themes')) .'/Resources/assets/js/themes.js')
    </x-slot:script>

    {{-- include Navigation so that will be load instant
    |-------------------------------------------------- --}}
    @include('themes::components.default.nav')


    {{-- Message Module - Error & Messages
    |--- Not necessary for the Frontend where the user have to use it only to read.
    |---------------------------------------------------
    <x-acp::messages /> --}}

{{-- Site Content
|------------------------------------------------- --}}
{{ $slot }}

    {{-- Include the Footer
    -------------------------------------------------- --}}
    @include('frontendap::components.footer')

</x-themes::default.master>
