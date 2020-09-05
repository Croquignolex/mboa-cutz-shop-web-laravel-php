@extends('master')

@section('master.title', page_title(trans('page.home')))

@section('master.body')
    @include('partials.home.menu')
    @include('partials.home.banner')
    @include('partials.home.about')
    @include('partials.home.activities')
    @include('partials.home.contact')
    @include('partials.home.footer')
@endsection

@push('master.style')
    <link rel="stylesheet" href="{{ css_asset('bootstrap.min') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('font-awesome.min') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('aos') }}" type="text/css">
    <link rel="stylesheet" href="{{ css_asset('landing') }}" type="text/css">
@endpush

@push('master.script')
    <script src="{{ js_asset('jquery.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('bootstrap.min') }}" type="application/javascript"></script>
    <script src="{{ js_asset('aos') }}" type="application/javascript"></script>
    <script src="{{ js_asset('smoothscroll') }}" type="application/javascript"></script>
    <script src="{{ js_asset('custom') }}" type="application/javascript"></script>
@endpush
