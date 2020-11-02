@extends('master')

@section('master.title')@yield('error.master.title')@endsection

@push('master.style')
    <link rel="stylesheet" href="{{ css_asset('error') }}" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
@endpush

@section('master.body')
    <div id="notfound">
        <div class="notfound-bg"></div>
        <div class="notfound">
            <div class="notfound-404">
                <h1>@yield('error.code')</h1>
            </div>
            <h2>@yield('error.title')</h2>
            <p class="text-white">@yield('error.message')</p>
            <a href="{{ route('home.index') }}" class="contact-btn">Retour</a>
        </div>
    </div>
@endsection