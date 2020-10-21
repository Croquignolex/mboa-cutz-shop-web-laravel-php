<!DOCTYPE html>
<html lang="{{ Illuminate\Support\Facades\App::getLocale() }}">
    <head>
        @if (env('APP_ENV') === 'production')
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-GVCGCKJ5NG"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'G-GVCGCKJ5NG');
            </script>
        @endif
        <meta charset="utf-8">
        <meta name="author" content="{{ seo_authors() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="{{ seo_description() }}"/>
        <meta name="keywords" content="{{ seo_keywords() }}"/>

        <meta name="robots" content="noindex">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="base-url" content="{{ config('app.url') }}">
        <meta name="locale" content="{{ Illuminate\Support\Facades\App::getLocale() }}">

        <title>@yield('master.title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ favicon_img_asset('apple-icon-57x57') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ favicon_img_asset('apple-icon-60x60') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ favicon_img_asset('apple-icon-72x72') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ favicon_img_asset('apple-icon-76x76') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ favicon_img_asset('apple-icon-114x114') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ favicon_img_asset('apple-icon-120x120') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ favicon_img_asset('apple-icon-144x144') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ favicon_img_asset('apple-icon-152x152') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ favicon_img_asset('apple-icon-180x180') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ favicon_img_asset('android-icon-192x192') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ favicon_img_asset('favicon-32x32') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ favicon_img_asset('favicon-96x96') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ favicon_img_asset('favicon-16x16') }}">
        <link rel="manifest" href="{{ favicon_file_asset('manifest') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <meta name="apple-mobile-web-app-title" content="{{ seo_authors() }}">
        <meta name="application-name" content="{{ seo_authors() }}">

        <meta property="og:title" content="{{ seo_authors() }}" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="{{ Illuminate\Support\Facades\App::getLocale() }}"/>
        <meta property="og:ttl" content="0" />

        <meta property="og:description" content="{{ seo_description() }}">
        <meta property="og:url" content="{{ config('app.url') }}" />
        <meta property="og:image" content="{{ img_asset('logo', 'jpg') }}" />
        <meta property="twitter:image" content="{{ img_asset('logo', 'jpg') }}" />

        <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <link rel="stylesheet" href="{{ css_asset('toastr.min') }}" type="text/css">

        @stack('master.style')

        <link rel="stylesheet" href="{{ css_asset('master') }}" type="text/css">
    </head>

    <body class="vertical">
        @yield('master.body')

        <script src="{{ js_asset('jquery.min') }}" type="application/javascript"></script>
        <script src="{{ js_asset('toastr.min') }}" type="application/javascript"></script>

        @stack('master.script')

        <script src="{{ js_asset('master') }}" type="application/javascript"></script>

        @if(session()->has('toast.alert'))
            <script>
                callToaster(
                    "{{ session('toast.title') }}",
                    "{{ session('toast.message') }}",
                    "{{ session('toast.type') }}",
                    "{{ session('toast.delay') }}"
                );
            </script>
        @endif
    </body>
</html>
