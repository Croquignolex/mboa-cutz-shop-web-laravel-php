@extends('layouts.shop.mini')

@section('shop.mini.master.title', page_title(__('page.events')))

@section('shop.mini.page', __('page.events'))

@section('shop.mini.master.body')
    <section class="ftco-section">
        <div class="container" id="articles-infinite-scroll" data-url="{{ locale_route('events.ajax') }}">
            <events-component></events-component>
        </div>
    </section>
@endsection

@push('shop.mini.master.script')
    <script src="{{ js_asset('vue-resource.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('vue-infinite-loading.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('events-infinite-scroll') }}" type="application/javascript"></script>
@endpush