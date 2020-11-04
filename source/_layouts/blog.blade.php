<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <meta name="og:title" content="{{ $page->title }}"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="{{ $page->site_url }}"/>
        <meta property="og:site_name" content="Colin McAtee"/>
        <meta name="og:image" content="{{ $page->og_image }}"/>
        <meta property="og:description" content="{{ $page->description }}"/>
        <meta name="twitter:description" content="{{ $page->description }}"/>
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:site" content="@colin_mcatee"/>
        <meta name="twitter:creator" content="@colin_mcatee"/>
        <meta name="twitter:title" content="{{ $page->title }}"/>
        <meta name="twitter:url" content="{{ $page->site_url }}"/>
        <meta name="theme-color" content="#1D3557"/>
        <meta content="{{ $page->og_image }}" property="og:image">
        <meta content="{{ $page->og_image }}" name="twitter:image:src">
        <meta content="summary_large_image" name="twitter:card">
        <meta content="1200" name="og:image:width">
        <meta content="630" name="og:image:height">
        <meta content="{{ $page->title }}" property="og:title">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="https://cmcatee.s3.amazonaws.com/favicon-32x32.png">
        <script async defer data-domain="colinmcatee.com" src="https://plausible.io/js/plausible.js"></script>
        @yield('head')
    </head>
    <body>
        @yield('body')
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="{{mix('js/main.js', 'assets/build')}}"></script>
    </body>
</html>
