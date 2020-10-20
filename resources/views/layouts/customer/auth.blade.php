@extends('master')

@section('master.title')@yield('customer.auth.master.title')@endsection

@section('master.body')
    @yield('customer.auth.master.body')
@endsection

@push('master.style')
    <link rel="stylesheet" href="{{ customer_css_asset('style') }}" type="text/css">
@endpush

@push('master.script')

@endpush
