@extends('layouts.shop')

@section('shop.master.title', page_title(trans('page.home')))

@section('shop.master.body')
    @include('partials.home.banner')
{{--TODO: undo products area comment while admin product managemnt is ready--}}
{{--    @include('partials.featured-products')--}}
    @include('partials.home.testimonials')
    @include('partials.home.stats')
    @include('partials.featured-articles')
@endsection