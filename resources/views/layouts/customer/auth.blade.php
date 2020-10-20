@extends('master')

@section('master.title')@yield('customer.auth.master.title')@endsection

@section('master.body')
    @yield('customer.auth.master.body')
@endsection

@push('master.style')

@endpush

@push('master.script')

@endpush
