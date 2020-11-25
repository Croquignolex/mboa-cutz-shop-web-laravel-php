@extends('layouts.shop.mini')

@section('shop.mini.master.title', page_title(__('page.services')))

@section('shop.mini.page', __('page.services'))

@section('shop.mini.master.body')
    <section class="ftco-section">
        {{-- Title area --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">@lang('general.our_services')</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5">@lang('general.our_gallery_description')</p>
                </div>
            </div>
        </div>
        {{-- Services area --}}
        <div class="container my-5">
            <div class="row">
                <div class="col">
                    {{ $services->links('partials.pagination') }}
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                @foreach ($services as $service)
                    @if($loop->index < 3)
                        @include('partials.service-details', ['style_class' => 'img'])
                    @else
                        @include('partials.service-details', ['style_class' => 'img order-md-last'])
                    @endif
                @endforeach
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col text-right">
                    {{ $services->links('partials.pagination') }}
                </div>
            </div>
        </div>
    </section>
@endsection