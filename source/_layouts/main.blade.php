<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->url }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title ?? "Colin McAtee" }}</title>
        <meta name="og:title" content="{{ $page->title ?? "Colin McAtee" }}"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="{{  $page->url }}"/>
        <meta property="og:site_name" content="ProductiveRecruit"/>
        <meta name="og:image" content="{{ $page->ogImage }}"/>
        <meta property="og:description" content="{{ $page->description }}"/>
        <meta name="twitter:description" content="{{ $page->description }}"/>
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:site" content="@colin_mcatee"/>
        <meta name="twitter:creator" content="@colin_mcatee"/>
        <meta name="twitter:title" content="{{ $page->title ?? 'College Athletic Recruiting Software • ProductiveRecruit' }}"/>
        <meta name="twitter:url" content="{{  $page->url }}"/>
        <meta name="theme-color" content="#3A86FF"/>
        <meta content="{{ $page->ogImage }}" property="og:image">
        <meta content="{{ $page->ogImage }}" name="twitter:image:src">
        <meta content="summary_large_image" name="twitter:card">
        <meta content="1200" name="og:image:width">
        <meta content="630" name="og:image:height">
        <meta content="{{ $page->title ?? 'Colin McAtee' }}" property="og:title">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="32x32"
            href="/assets/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16"
            href="/assets/images/favicon-16x16.png">
        @if($page->production)
            <script src="https://cdn.usefathom.com/script.js" data-site="MLAQMQCX" defer></script>
        @endif
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @yield('head')
    </head>
    <body class="text-gray-900 font-sans antialiased">
        @yield('body')
    </body>
</html>
