@extends('layouts.shop.mini')

@section('shop.mini.master.title', page_title(__('page.events')))

@section('shop.mini.page', __('page.events'))

@section('shop.mini.master.body')
    <section class="ftco-section">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">@lang('page.events')</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5">@lang('general.our_gallery_description')</p>
                </div>
            </div>
        </div>

        <div class="container" id="events-infinite-scroll" data-url="{{ locale_route('events.ajax') }}">
            <events-component></events-component>
        </div>
    </section>
@endsection

@push('shop.mini.master.script')
    <script src="{{ js_asset('vue-resource.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('vue-infinite-loading.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('events-infinite-scroll') }}" type="application/javascript"></script>
@endpush