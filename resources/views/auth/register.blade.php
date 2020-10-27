@extends('layouts.customer.auth')

@section('customer.auth.master.title', page_title(__('page.register')))

@section('customer.auth.master.body')
    <div class="container d-flex flex-column justify-content-center vh-100 mt-5">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-xl-9 col-lg-9 col-md-10">
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
                    <div class="form-row">
                        <div class="col-md-6">
                            @include('partials.form.input', [
                                'name' => __('general.first_name'),
                                 'id' => 'first_name',
                                 'type' => 'text',
                                 'value' => old('first_name'),
                            ])
                        </div>
                        <div class="col-md-6">
                            @include('partials.form.input', [
                               'name' => __('general.last_name'),
                                'id' => 'last_name',
                                'type' => 'text',
                                'value' => old('last_name'),
                           ])
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="form-row">
                        <div class="col-md-6">
                            @include('partials.form.input', [
                               'name' => __('auth.password'),
                                'id' => 'password',
                                'type' => 'password',
                                'value' => old('password'),
                           ])
                            @include('partials.form.input', [
                              'name' => __('auth.password_confirmation'),
                               'id' => 'password_confirmation',
                               'type' => 'password',
                               'value' => old('password_confirmation'),
                           ])
                        </div>
                        <div class="col-md-6 mb-4">
                            <p class="mb-2">@lang('auth.password_requirement')</p>
                            <p class="small text-muted mb-2">@lang('auth.password_requirement_description')</p>
                            <ul class="small text-muted pl-4 mb-0">
                                <li>@lang('auth.password_requirement_characters')</li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-theme btn-block hover-border-white" type="submit">
                        @lang('page.register')
                    </button>
                    {{-- Action buttons area --}}
                    <div class="row mt-5 mb-3">
                        <div class="col-6 offset-3">
                            <a class="btn btn-secondary btn-block" href="{{ locale_route('login') }}">@lang('page.login')</a>
                        </div>
                    </div>
                    {{-- Copyright area --}}
                    @include('partials.auth-copyright')
                </form>
            </div>
        </div>
    </div>
@endsection