<x-themes::master

{{--| Title is "Title - Modelname"
    |--------------------------------------------------- --}}
    title="{{ $title ?? 'Home' }}"

{{--| Tailwind Design Classes for the first container
    |--------------------------------------------------- --}}
    class="container mx-auto antialiased {{ $class ?? '' }}">

{{--| CSS Styles
    |--------------------------------------------------- --}}
    <x-slot:style>
        @vite('Modules/Themes/Resources/assets/css/themes.css')
        {{ $style ?? '' }}
    </x-slot:style>

{{--| JS for App
    |--------------------------------------------------- --}}
    <x-slot:script>
        @vite('Modules/Themes/Resources/assets/js/themes.js')
        {{ $script }}
    </x-slot:script>

{{--| Site Content
    |------------------------------------------------- --}}
    {{ $slot }}

</x-themes::master>
