@extends('master')

@section('master.title')@yield('shop.master.title')@endsection

@section('master.body')
    @include('partials.home.menu')
    @yield('shop.master.body')
@endsection

@push('master.style')
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ css_asset('open-iconic-bootstrap.min') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('animate') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('owl.carousel.min') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('owl.theme.default.min') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('magnific-popup') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('aos') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('aos') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('ionicons.min') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('bootstrap-datepicker') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('query.timepicker') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('flaticon') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('icomoon') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('style') }}" type="text/css">
    @stack('shop.master.style')
@endpush

@push('master.script')
    <script src="{{ js_asset('jquery.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('jquery-migrate-3.0.1.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('popper.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('bootstrap.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('jquery.easing.1.3') }}" type="application/javascript"></script>
    <script src="{{ js_asset('jquery.waypoints.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('jquery.stellar.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('owl.carousel.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('jquery.magnific-popup.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('jquery.animateNumber.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('bootstrap-datepicker.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('jquery.timepicker.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('scrollax.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('main.min') }}" type="application/javascript"></script>
    @stack('shop.master.script')
@endpush
