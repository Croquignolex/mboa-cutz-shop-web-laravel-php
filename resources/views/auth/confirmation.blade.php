@extends('layouts.customer.auth')

@section('customer.auth.master.title', page_title(__('page.confirmation')))

@section('customer.auth.master.body')
    <div class="container d-flex flex-column justify-content-center vh-100">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="text-center app-brand">
                    <a href="{{ locale_route('home.index') }}">
                        <img src="{{ img_asset('logo-white') }}" alt="..." height="100">
                    </a>
                </div>
                <div class="mt-5">
                    @include('partials.app-error-message')
                    @include('partials.app-success-message')
                </div>
                {{-- Action buttons area --}}
                <div class="row mt-5 mb-3">
                    <div class="col-6 offset-3">
                        <a class="btn btn-secondary btn-block" href="{{ locale_route('login') }}">@lang('page.login')</a>
                    </div>
                </div>
                {{-- Copyright area --}}
                @include('partials.auth-copyright')
            </div>
        </div>
    </div>
@endsection