<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">@lang('home.featured_articles')</h2>
                <p>@lang('home.featured_articles_description')</p>
            </div>
        </div>
        <div class="row d-flex">
            @foreach($featured_articles as $article)
                <div class="col-md-4 d-flex ftco-animate">
                    @include('partials.article-card', compact('article'))
                </div>
            @endforeach
        </div>
    </div>
</section>