<div class="hero-wrap js-fullheight" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <a href="{{ video_asset('banner') }}"
               class="icon popup-vimeo d-flex justify-content-center align-items-center"
            >
                <span class="icon-play"></span>
            </a>
            <div class="col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <p class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Une façon unique de prendre soin de vous</p>
                <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Des offres exclusives</h1>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <a href="{{ locale_route('services.index') }}" class="btn btn-primary px-4 py-3">
                        Faire une reservation
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex align-items-end">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text"><h3>Dimanche</h3><p>10:00 - 20:00</p></div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text"><h3>Mardi - Samedi</h3><p>9:00 - 19:30</p></div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text"><h3>Lundi</h3><p class="text-danger"><strong>Fermé</strong></p></div>
                    </div>
                </div>
            </div>
            <div class="social pl-md-5 p-4">
                <ul class="social-icon">
                    <li class="ftco-animate"><a href="{{ config('company.twitter') }}"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="{{ config('company.facebook') }}"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="{{ config('company.instagram') }}"><span class="icon-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Bienvenue sur <span>{{ config('app.name') }}</span> Votre salon esthétique pour homme ultra moderne</h2>
                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 text-center ftco-animate">
                <p>
                    Nous somme MBOA CUTZ, un babershop CAMEROUNAIS ultra moderne spécialisé pour
                    hommes Afro, Asiatique et Européen. Nous sommes un concept, une philosphie,
                    une autre façon de voire la coupe de cheveux.
                </p>
            </div>
        </div>
    </div>
</section>