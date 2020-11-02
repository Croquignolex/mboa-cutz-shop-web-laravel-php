<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">@lang('home.testimonials')</h2>
                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                <p class="mt-5">@lang('home.testimonials_description')</p>
            </div>
        </div>
        <div class="row">
            @foreach($testimonials as $testimonial)
                <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4 text-center">
                            <img src="{{ $testimonial->image_src }}" alt="...">
                        </div>
                        <div class="info">
                            <h3 class="text-center">{{ $testimonial->name }}</h3>
                            <div class="text"><p>{{ $testimonial->description }}</p></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>