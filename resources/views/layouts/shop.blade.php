@extends('master')

@section('master.title')@yield('shop.master.title')@endsection

@section('master.body')@yield('shop.master.body')@endsection

@push('master.style')
    <link rel="stylesheet" href="{{ css_asset('linearicons') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('font-awesome.min') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('themify-icons') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('bootstrap') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('owl.carousel') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('nice-select') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('nouislider.min') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('ion.rangeSlider') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('ion.rangeSlider.skinFlat') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('magnific-popup') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('main') }}" type="text/css">
    @stack('shop.master.style')
@endpush

@push('master.script')
    <script src="{{ js_asset('jquery-2.2.4.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('popper') }}" type="application/javascript"></script>
    <script src="{{ js_asset('bootstrap.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('jquery.ajaxchimp.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('jquery.nice-select.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('jquery.sticky') }}" type="application/javascript"></script>
    <script src="{{ js_asset('nouislider.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('countdown') }}" type="application/javascript"></script>
    <script src="{{ js_asset('jquery.magnific-popup.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('owl.carousel.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('main') }}" type="application/javascript"></script>
    @stack('shop.master.script')
@endpush
