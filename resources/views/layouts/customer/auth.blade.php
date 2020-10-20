@extends('master')

@section('master.title')@yield('customer.auth.master.title')@endsection

@section('master.body')
    @yield('customer.auth.master.body')
@endsection

@push('master.style')
    <link rel="stylesheet" href="{{ customer_css_asset('style') }}" type="text/css">
    <link rel="stylesheet" href="{{ customer_css_asset('feather') }}" type="text/css">
@endpush

@push('master.script')
    <script src="{{ customer_js_asset('jquery.min') }}" type="application/javascript"></script>
    <script src="{{ customer_js_asset('popper.min') }}" type="application/javascript"></script>
    <script src="{{ customer_js_asset('bootstrap.min') }}" type="application/javascript"></script>
    <script src="{{ customer_js_asset('jquery.stickOnScroll') }}" type="application/javascript"></script>
@endpush
