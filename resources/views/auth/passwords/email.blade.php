@extends('layouts.customer.auth')

@section('customer.auth.master.title', page_title(__('page.pwd_reset')))

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
                    @include('partials.app-success-message')
                </div>
                <form action="" method="POST">
                    {{ csrf_field() }}
                    @include('partials.form.input', [
                        'name' => __('general.email'),
                         'id' => 'email',
                         'type' => 'text',
                         'value' => old('email'),
                    ])
                    <button class="btn btn-lg btn-theme btn-block hover-border-white" type="submit">
                        @lang('auth.recover_password')
                    </button>
                    {{-- Action buttons area --}}
                    <div class="row mt-5 mb-3">
                        <div class="col-6 offset-3">
                            <a class="btn btn-secondary btn-block" href="{{ locale_route('login') }}">
                                <i class="fe fe-arrow-left mr-2"></i>
                                @lang('page.login')
                            </a>
                        </div>
                    </div>
                    {{-- Copyright area --}}
                    @include('partials.auth-copyright')
                </form>
            </div>
        </div>
    </div>
@endsection