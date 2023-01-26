{{--
|--------------------------------------------------------------------------
| Master Frontend Template
|--------------------------------------------------------------------------
|
| Master Template from PHP/Laravel Module "FrontendXXX".
| This is the Master-Template where all Frontend-apps have to use it.
| Don't change it, until you know what you do!
|
| @author:  YezzDesign
| @mail:    yezz.design@schodie.de
|
| -------------------------------------------------- --}}

{{--
| --------------------------------------------------
| HTML5 Doctype
| -------------------------------------------------- --}}
<!DOCTYPE html>

{{--
| --------------------------------------------------
| Change HTML language automatically when app locale has changed
| -------------------------------------------------- --}}
<html lang="{{ $htmllang ?? str_replace('_', '-', app()->getLocale()) }}">

{{--| --------------------------------------------------
    | HEAD Section
    | -------------------------------------------------- --}}
    <head>

    {{--| --------------------------------------------------
        | Meta Daten
        | -------------------------------------------------- --}}
        <meta charset="{{ $metaCharset ?? 'utf-8' }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"    content="{{ $metaViewport ?? 'width=device-width, initial-scale=1' }}">
        <meta name="keywords"    content="{{ $metaKeywords ?? '' }}">
        <meta name="author"      content="{{ $metaAuthor ?? config('acp.website_author') }}">
        <meta name="description" content="{{ $metaDescription ?? '' }}">

    {{--| --------------------------------------------------
        | Custom META Data, Keywords, etc
        | -------------------------------------------------- --}}
        {{ $meta ?? '' }}

    {{--| --------------------------------------------------
        | Title of Website | Schema "Site|Module|AppName"
        | -------------------------------------------------- --}}
        <title>{{ $title ?? 'Home' }} - {{ config('acp.website_name') }}</title>

    {{--| --------------------------------------------------
        | Fonts
        | -------------------------------------------------- --}}
        {{ $fonts ?? '' }}

    {{--| --------------------------------------------------
        | Custom CSS File
        | -------------------------------------------------- --}}
        {{ $style ?? '' }}

    {{--| --------------------------------------------------
        | Custom JS File
        | ----------------------------------------------------}}
        {{ $script ?? '' }}

{{--| --------------------------------------------------
    | End HEAD Section
    | -------------------------------------------------- --}}
    </head>

{{--| --------------------------------------------------
    | Start BODY Content - no classes preloaded
    | -------------------------------------------------- --}}
    <body id="{{ $id ?? 'body_content' }}" class="{{ $class ?? '' }}">

{{--| --------------------------------------------------
    | Insert all the good Stuff
    | -------------------------------------------------- --}}
    {{ $slot }}

{{--| --------------------------------------------------
    | End BODY Content
    | -------------------------------------------------- --}}
    </body>

{{--
| --------------------------------------------------
| Close the HTML Document
| -------------------------------------------------- --}}
</html>
