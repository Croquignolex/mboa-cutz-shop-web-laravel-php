@extends('layouts.shop')

@section('shop.master.title', page_title(trans('page.home')))

@section('shop.master.body')
    @include('partials.home.banner')
{{--    @include('partials.home.categories')--}}
{{--    @include('partials.home.products')--}}
{{--    @include('partials.home.exclusive')--}}
{{--    @include('partials.home.brands')--}}
{{--    @include('partials.home.related')--}}
{{--    @include('partials.home.footer')--}}
@endsection