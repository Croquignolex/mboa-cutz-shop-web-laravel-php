@extends('layouts.shop.mini')

@section('shop.mini.master.title', page_title(__('page.blog')))

@section('shop.mini.page', __('page.blog'))

@section('shop.mini.master.body')
    <section class="ftco-section">
        <div class="container" id="articles-infinite-scroll" data-url="{{ locale_route('articles.ajax') }}">
            <articles-component></articles-component>
        </div>
    </section>
@endsection

@push('shop.mini.master.script')
    <script src="{{ js_asset('vue-resource.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('vue-infinite-loading.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('articles-infinite-scroll') }}" type="application/javascript"></script>
@endpush