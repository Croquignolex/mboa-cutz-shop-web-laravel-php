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
                            <p>@lang('general.accepted_terms_and_conditions_description_2', ['company' => config('app.name')]).</p>
                            <p>@lang('general.accepted_terms_and_conditions_description_3', ['company' => config('app.name')]).</p>
                        </li>
                        <li>
                            <h3>@lang('general.web_site_usage')</h3>
                            <p>@lang('general.web_site_usage_description_1', ['company' => config('app.name')]).</p>
                            <p>@lang('general.web_site_usage_description_2', ['company' => config('app.name')]).</p>
                            <p>@lang('general.web_site_usage_description_3', ['company' => config('app.name')]).</p>
                        </li>
                        <li>
                            <h3>@lang('general.limited_responsibility')</h3>
                            <p>@lang('general.limited_responsibility_description_1', ['company' => config('app.name')]).</p>
                            <p>@lang('general.limited_responsibility_description_2', ['company' => config('app.name')]).</p>
                        </li>
                        <li>
                            <h3>@lang('general.indemnity')</h3>
                            <p>@lang('general.indemnity_description', ['company' => config('app.name')]).</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection