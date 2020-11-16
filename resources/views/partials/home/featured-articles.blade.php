<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">@lang('home.featured_articles')</h2>
                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                <p class="mt-5">@lang('home.featured_articles_description')</p>
            </div>
        </div>
        <div class="row d-flex">
            @foreach($featured_articles as $article)
                <div class="col-md-4 d-flex ftco-animate">
                    @include('partials.articles.article-card', compact('article'))
                </div>
            @endforeach
        </div>
    </div>
</section>