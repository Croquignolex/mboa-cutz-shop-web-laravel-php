@extends('layouts.shop.main')

@section('shop.main.master.title')@yield('shop.mini.master.title')@endsection

@section('shop.main.master.body')
    <div class="hero-wrap mini-banner" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 mt-5 bread text-uppercase" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@yield('shop.mini.page')</h1>
                </div>
            </div>
        </div>
    </div>
    @yield('shop.mini.master.body')
@endsection

@push('shop.main.master.style')
    @stack('shop.mini.master.style')
@endpush

@push('shop.main.master.script')
    @stack('shop.mini.master.script')
@endpush
