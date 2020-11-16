@extends('layouts.shop.mini')

@section('shop.mini.master.title', page_title(__('page.gallery')))

@section('shop.mini.page', __('page.gallery'))

@section('shop.mini.master.body')
    <section class="ftco-gallery">
        {{-- Title area --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">@lang('general.our_gallery')</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5">@lang('general.our_gallery_description')</p>
                </div>
            </div>
        </div>
        {{-- Pictures area --}}
        <div class="container my-5">
            <div class="row">
                <div class="col">
                    {{ $pictures->links('partials.pagination') }}
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters">
                @foreach ($pictures as $picture)
                    <div class="col-md-3 ftco-animate">
                        <a href="{{ $picture->image_src }}" class="gallery img image-popup d-flex align-items-center" style="background-image: url({{ $picture->image_src }});">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col text-right">
                    {{ $pictures->links('partials.pagination') }}
                </div>
            </div>
        </div>
    </section>
@endsection