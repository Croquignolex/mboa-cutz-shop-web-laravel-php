@extends('layouts.shop')

@section('shop.master.title', page_title(trans('page.home')))

@section('shop.master.body')
    @include('partials.banner')
    @include('partials.home.stats')
    @include('partials.latest-blog')
@endsection