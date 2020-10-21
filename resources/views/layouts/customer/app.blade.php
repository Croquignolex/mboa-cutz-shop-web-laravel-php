@extends('master')

@section('master.title')@yield('customer.app.master.title')@endsection

@section('master.body')
    <div class="wrapper">
        @include('partials.customer.navbar')
        @include('partials.customer.sidebar')
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        @yield('customer.app.master.body')
                    </div>
                </div>
            </div>
         </main>
    </div>
@endsection

@push('master.style')
    <link rel="stylesheet" href="{{ customer_css_asset('style') }}" type="text/css">
    <link rel="stylesheet" href="{{ customer_css_asset('feather') }}" type="text/css">
    <link rel="stylesheet" href="{{ customer_css_asset('simplebar') }}" type="text/css">
    @stack('customer.app.master.style')
@endpush

@push('master.script')
    <script src="{{ customer_js_asset('jquery.min') }}" type="application/javascript"></script>
    <script src="{{ customer_js_asset('popper.min') }}" type="application/javascript"></script>
    <script src="{{ customer_js_asset('bootstrap.min') }}" type="application/javascript"></script>
    <script src="{{ customer_js_asset('simplebar.min') }}" type="application/javascript"></script>
    <script src="{{ customer_js_asset('jquery.stickOnScroll') }}" type="application/javascript"></script>
    @stack('customer.app.master.script')
@endpush
