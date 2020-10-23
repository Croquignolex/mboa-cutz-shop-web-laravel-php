@extends('layouts.customer.auth')

@section('customer.auth.master.title', page_title(__('page.register')))

@section('customer.auth.master.body')
    <div class="container d-flex flex-column justify-content-center vh-100">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-9 col-md-10">
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
                    <div class="form-group">
                        @if ($errors->has('email'))
                            <label for="email">
                                <small class="text-danger">
                                    {{ $errors->first('email') }}
                                </small>
                            </label>
                        @endif

                        <input type="text"
                               id="email"
                               name="email"
                               value="{{ old('email') }}"
                               class="form-control form-control-lg"
                               placeholder="@lang('general.email')"
                        >
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">
                                @if ($errors->has('password'))
                                    <small class="text-danger">
                                        {{ $errors->first('password') }}
                                    </small>
                                @endif
                            </label>
                            <input type="password"
                                   id="password"
                                   name="password"
                                   value="{{ old('password') }}"
                                   class="form-control form-control-lg"
                                   placeholder="@lang('auth.password')"
                            >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">
                                @if ($errors->has('password'))
                                    <small class="text-danger">
                                        {{ $errors->first('password') }}
                                    </small>
                                @endif
                            </label>
                            <input type="password"
                                   id="password"
                                   name="password"
                                   value="{{ old('password') }}"
                                   class="form-control form-control-lg"
                                   placeholder="@lang('auth.password')"
                            >
                        </div>
                    </div>

                    <button class="btn btn-lg btn-theme btn-block hover-border-white" type="submit">
                        @lang('page.login')
                    </button>
                    {{-- Action buttons area --}}
                    <div class="row mt-5 mb-3">
                        <div class="col-6 offset-3">
                            <a class="btn btn-secondary btn-block" href="{{ locale_route('login') }}">@lang('page.login')</a>
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