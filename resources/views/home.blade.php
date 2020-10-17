@extends('layouts.shop.main')

@section('shop.main.master.title', page_title(__('page.home')))

@section('shop.main.master.body')
    @include('partials.home.banner')
    @include('partials.featured-products')
    @include('partials.home.testimonials')
    @include('partials.home.stats')
    @include('partials.featured-articles')
@endsection