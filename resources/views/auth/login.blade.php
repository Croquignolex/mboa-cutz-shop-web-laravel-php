@extends('layouts.customer.auth')

@section('customer.auth.master.title', page_title(__('page.login')))

@section('customer.auth.master.body')
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" action="" method="POST">
                {{ csrf_field() }}
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ locale_route('home.index') }}">
                    <img src="{{ img_asset('logo-white') }}" alt="..." height="100">
                </a>
                <h1 class="h6 mb-3">@lang('general.login')</h1>
                <div class="form-group">
                    <label for="email">
                        @if ($errors->has('email'))
                            <small class="text-danger">
                                {{ $errors->first('email') }}
                            </small>
                        @endif
                    </label>
                    <input type="text" id="email" class="form-control form-control-lg" placeholder="@lang('general.email')">
                </div>
                <div class="form-group">
                    <label for="password">
                        @if ($errors->has('password'))
                            <small class="text-danger">
                                {{ $errors->first('password') }}
                            </small>
                        @endif
                    </label>
                    <input type="password" id="password" class="form-control form-control-lg" placeholder="@lang('general.password')">
                </div>
                <button class="btn btn-lg btn-theme btn-block hover-border-white" type="submit">
                    @lang('general.login')
                </button>
                <p class="mt-5 mb-3 text-muted">
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
@endsection