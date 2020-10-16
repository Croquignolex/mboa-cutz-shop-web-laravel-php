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
                <p class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@lang('home.banner_top_title')</p>
                <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@lang('home.banner_title')</h1>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <a href="{{ locale_route('services.index') }}" class="btn btn-primary px-4 py-3">
                        @lang('home.booking')
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
                        <div class="text"><h3>@lang('home.calendar_one_title')</h3><p>@lang('home.calendar_one_range')</p></div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text"><h3>@lang('home.calendar_two_title')</h3><p>@lang('home.calendar_two_range')</p></div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text"><h3>@lang('home.calendar_three_title')</h3><p class="text-danger"><strong>@lang('home.calendar_three_range')</strong></p></div>
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
                <h2 class="mb-4">@lang('home.welcome_start') <span>{{ config('app.name') }}</span> @lang('home.welcome_end')</h2>
                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 text-center ftco-animate">
                <p>@lang('home.welcome_description', ['name' => config('app.name')]) </p>
            </div>
        </div>
    </div>
</section>