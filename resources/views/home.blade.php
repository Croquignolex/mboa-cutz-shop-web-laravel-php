@extends('layouts.shop')

@section('shop.master.title', page_title(trans('page.home')))

@section('shop.master.body')
    @include('partials.banner')
    @include('partials.latest-blog')
@endsection