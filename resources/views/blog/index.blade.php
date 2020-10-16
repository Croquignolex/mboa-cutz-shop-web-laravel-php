@extends('layouts.shop.mini')

@section('shop.mini.master.title', page_title(trans('page.blog')))

@section('shop.mini.page', trans('page.blog'))

@section('shop.mini.master.body')
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                @foreach ($articles as $article)
                    <div class="col-md-4 d-flex ftco-animate">
                        @include('partials.article-card', compact('article'))
                    </div>
                @endforeach
            </div>
{{--            TODO: impriove pagination links --}}
            {{--<div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>--}}
        </div>
    </section>
@endsection