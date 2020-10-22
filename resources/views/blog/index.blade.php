@extends('layouts.shop.mini')

@section('shop.mini.master.title', page_title(__('page.blog')))

@section('shop.mini.page', __('page.blog'))

@section('shop.mini.master.body')
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <artcle-component></artcle-component>
            </div>

            {{--<div class="row mb-5">
                <div class="col">
                    {{ $articles->links('partials.pagination') }}
                </div>
            </div>--}}

            {{--<div class="scrolling-pagination">
                <div class="row d-flex">
                    @foreach ($articles as $article)
                        <div class="col-md-4 d-flex ftco-animate">
                            @include('partials.articles.article-card', compact('article'))
                        </div>
                    @endforeach
                    {{ $articles->links() }}
                </div>
            </div>--}}

            {{--<div class="row mb-4">
                <div class="col text-right">
                    {{ $articles->links('partials.pagination') }}
                </div>
            </div>--}}
        </div>
    </section>
@endsection

@push('shop.mini.master.script')
    <script type="text/javascript">

    </script>
@endpush