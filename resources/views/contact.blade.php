@extends('layouts.shop.mini')

@section('shop.mini.master.title', page_title(trans('page.contact')))

@section('shop.mini.page', trans('page.contact'))

@section('shop.mini.master.body')
    <section class="ftco-section contact-section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 contact-info ftco-animate">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4">Infortmationn</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Address:</span> {{ config('company.address') }}</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Phone:</span> {{ config('company.phone') }}</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Email:</span> {{ config('company.email') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 ftco-animate">
                    <div class="mx-5">@include('partials.error-message')</div>
                    <form action="{{ locale_route('contact.send-message') }}" class="contact-form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                @include('partials.form.input', [
                                     'name' => 'Nom & prénom',
                                     'id' => 'name',
                                     'type' => 'text',
                                     'value' => old('name'),
                                 ])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                @include('partials.form.input', [
                                     'name' => 'Téléphone',
                                     'id' => 'phone',
                                     'type' => 'text',
                                     'value' => old('phone'),
                                 ])
                            </div>
                            <div class="col-sm-6">
                                @include('partials.form.input', [
                                     'name' => 'Email',
                                     'id' => 'email',
                                     'type' => 'text',
                                     'value' => old('email'),
                                 ])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                @include('partials.form.input', [
                                     'name' => 'Sujet',
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
                                   'name' => 'Message',
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