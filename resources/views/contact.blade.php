@extends('layouts.shop.mini')

@section('shop.mini.master.title', page_title(trans('page.contact')))

@section('shop.mini.page', trans('page.contact'))

@section('shop.mini.master.body')
    <section class="ftco-section contact-section">
        <div class="container mt-5">
            <div class="row block-9">
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
                <div class="col-md-1"></div>
                <div class="col-md-6 ftco-animate">
                    <div class="mx-5">@include('partials.error-message')</div>
                    <form action="{{ locale_route('contact.send-message') }}" class="contact-form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection