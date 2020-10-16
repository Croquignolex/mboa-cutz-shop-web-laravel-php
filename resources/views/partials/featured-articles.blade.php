<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Articles en vedette</h2>
                <p>Des astuces et des conseil pour tous. N'ésitez pas a y laisser des commentaires.</p>
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