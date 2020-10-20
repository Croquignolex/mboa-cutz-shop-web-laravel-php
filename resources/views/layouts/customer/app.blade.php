@extends('master')

@section('master.title')@yield('customer.app.master.title')@endsection

@section('master.body')
    @yield('customer.app.master.body')
@endsection

@push('master.style')
    @stack('customer.app.master.style')
@endpush

@push('master.script')
    @stack('customer.app.master.script')
@endpush
