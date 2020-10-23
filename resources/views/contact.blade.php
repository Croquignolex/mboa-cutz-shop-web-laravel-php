@extends('layouts.shop.mini')

@section('shop.mini.master.title', page_title(__('page.contact')))

@section('shop.mini.page', __('page.contact'))

@section('shop.mini.master.body')
    <section class="ftco-section contact-section">
        <div class="container mt-lg-5 mt-1">
            <div class="row">
                <div class="col-md-4 contact-info ftco-animate">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4">@lang('general.info')</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>@lang('general.address'):</span> {{ config('company.address') }}</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>@lang('general.phone'):</span> {{ config('company.phone') }}</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>@lang('general.email'):</span> {{ config('company.email') }}</p>
                        </div>
                        <div class="col-md-12 mb-5 text-center text-lg-left">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.975159429634!2d9.69788616525108!3d4.025480148261639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106112c7426691ff%3A0x310e860af24cda5!2sBonapriso%2C%20Douala!5e0!3m2!1sfr!2scm!4v1597665163772!5m2!1sfr!2scm" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 ftco-animate">
                    <div class="mx-lg-5">@include('partials.error-message')</div>
                    <form action="{{ locale_route('contact.send-message') }}" class="contact-form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                @include('partials.form.input', [
                                     'name' => __('general.names'),
                                     'id' => 'name',
                                     'type' => 'text',
                                     'value' => old('name'),
                                 ])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                @include('partials.form.input', [
                                     'name' => __('general.phone'),
                                     'id' => 'phone',
                                     'type' => 'text',
                                     'value' => old('phone'),
                                 ])
                            </div>
                            <div class="col-sm-6">
                                @include('partials.form.input', [
                                     'name' => __('general.email'),
                                     'id' => 'email',
                                     'type' => 'text',
                                     'value' => old('email'),
                                 ])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                @include('partials.form.input', [
                                     'name' => __('general.subject'),
                                     'id' => 'subject',
                                     'type' => 'text',
                                     'value' => old('subject'),
                                 ])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                @include('partials.form.textarea', [
                                   'id' => 'message',
                                   'name' => __('general.message'),
                                   'value' => old('message'),
                                ])
                            </div>
                        </div>
                        @include('partials.form.submit', ['name' => "Envoyer"])
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection