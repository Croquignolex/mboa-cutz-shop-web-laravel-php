@extends('layouts.shop.mini')

@section('shop.mini.master.title', page_title(__('page.terms_and_conditions')))

@section('shop.mini.page', __('page.terms_and_conditions'))

@section('shop.mini.master.body')
    <section class="ftco-section contact-section">
        <div class="container mt-lg-5 mt-1">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <h2 class="mb-5">@lang('page.terms_and_conditions')</h2>
                    <ul>
                        <li>
                            <h3>@lang('general.accepted_terms_and_conditions')</h3>
                            <p>@lang('general.accepted_terms_and_conditions_description_1', ['company' => config('app.name')]).</p>
                            <p>@lang('general.accepted_terms_and_conditions_description_2').</p>
                            <p>@lang('general.accepted_terms_and_conditions_description_3', ['company' => config('app.name')]).</p>
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