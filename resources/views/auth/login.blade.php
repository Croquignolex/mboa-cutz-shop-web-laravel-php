@extends('layouts.customer.auth')

@section('customer.auth.master.title', page_title(__('page.login')))

@section('customer.auth.master.body')
    <div class="container d-flex flex-column justify-content-center vh-100">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="text-center app-brand">
                    <a href="{{ locale_route('home.index') }}">
                        <img src="{{ img_asset('logo-white') }}" alt="..." height="100">
                    </a>
                </div>
                <div class="mt-4">
                    @include('partials.app-error-message')
                </div>
                <form action="" method="POST">
                    {{ csrf_field() }}
                    @include('partials.form.input', [
                        'name' => __('general.email'),
                         'id' => 'email',
                         'type' => 'text',
                         'value' => old('email'),
                    ])
                    @include('partials.form.input', [
                       'name' => __('auth.password'),
                        'id' => 'password',
                        'type' => 'text',
                        'value' => old('password'),
                   ])
                    <button class="btn btn-lg btn-theme btn-block hover-border-white" type="submit">
                        @lang('page.login')
                    </button>
                    {{-- Action buttons area --}}
                    <div class="row mt-5 mb-3">
                        <div class="col">
                            <a class="btn btn-secondary btn-block" href="{{ locale_route('register') }}">@lang('page.register')</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-secondary btn-block" href="">@lang('auth.forgotten_password')</a>
                        </div>
                    </div>
                    {{-- Copyright area --}}
                    <p class="mt-5 mb-3 text-muted text-center">
                        Copyright &copy; MBOA CUTZ 2020 | Design by
                        <a href="https://croquignolex.mboacutz.com/"
                           class="text-white"
                           target="_blank"
                        >
                            Croquignolex
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection