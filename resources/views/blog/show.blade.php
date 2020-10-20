@extends('layouts.shop.mini')

@section('shop.mini.master.title', page_title(__('page.article')))

@section('shop.mini.page', __('page.article'))

@section('shop.mini.master.body')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                @include('partials.articles.article-left-panel')
                @include('partials.articles.article-right-panel')
            </div>
        </div>
    </section>
@endsection