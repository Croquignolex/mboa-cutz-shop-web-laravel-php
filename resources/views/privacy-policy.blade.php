@extends('layouts.shop.mini')

@section('shop.mini.master.title', page_title(__('page.privacy_policy')))

@section('shop.mini.page', __('page.privacy_policy'))

@section('shop.mini.master.body')
    <section class="ftco-section contact-section">
        <div class="container mt-lg-5 mt-1">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <h2 class="mb-5">@lang('page.privacy_policy')</h2>
                    <ul>
                        <li>
                            <h3>@lang('general.terms')</h3>
                            <p>@lang('general.terms_description').</p>
                        </li>
                        <li>
                            <h3>@lang('general.collected_info')</h3>
                            <p>@lang('general.collected_info_description', ['company' => config('app.name')]).</p>
                        </li>
                        <li>
                            <h3>@lang('general.security')</h3>
                            <p>@lang('general.security_description', ['company' => config('app.name')]).</p>
                        </li>
                        <li>
                            <h3>@lang('general.access_info')</h3>
                            <p>@lang('general.access_info_description', ['company' => config('app.name'), 'mail' => config('company.email')]).</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection