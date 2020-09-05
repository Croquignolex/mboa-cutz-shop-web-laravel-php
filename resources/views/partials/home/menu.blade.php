<nav class="navbar navbar-expand-lg fixed-top no-padding-and-margin">
    <div class="container">
        {{-- Logo --}}
        <a class="navbar-brand no-padding-and-margin" href="{{ locale_route('home') }}">
            <img src="{{ img_asset('logo', 'jpg') }}" alt="..." width="70">
        </a>

        {{-- Toogle button --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-lg-auto">
                {{-- Menu items --}}
                <li class="nav-item">
                    <a href="#home" class="nav-link smoothScroll">{{ trans('page.home') }}</a>
                </li>

                <li class="nav-item">
                    <a href="#about" class="nav-link smoothScroll">{{ trans('page.about') }}</a>
                </li>

                <li class="nav-item">
                    <a href="#activities" class="nav-link smoothScroll">{{ trans('page.activities') }}</a>
                </li>

                <li class="nav-item">
                    <a href="#contact" class="nav-link smoothScroll">{{ trans('page.contact') }}</a>
                </li>
            </ul>

            {{-- Menu social media icons --}}
            <ul class="social-icon ml-lg-3">
                <li>
                    <a href="https://www.facebook.com/mboacutz"
                       class="fa fa-facebook"
                       target="_blank"
                    ></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/mboa_cutz"
                       class="fa fa-instagram"
                       target="_blank"
                    ></a>
                </li>
            </ul>
        </div>
    </div>
</nav>