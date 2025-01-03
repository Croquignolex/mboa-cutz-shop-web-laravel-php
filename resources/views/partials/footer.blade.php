@inject('eventService', 'App\Services\EventService')
<footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">@lang('general.about')</h2>
                    <p>@lang('home.welcome_description', ['name' => config('app.name')])</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="{{ config('company.twitter') }}"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="{{ config('company.facebook') }}"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="{{ config('company.instagram') }}"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">@lang('general.recently')</h2>
                    @foreach($eventService->latestEvents() as $event)
                        @include('partials.event-card-mini', compact('event'))
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">@lang('general.contact_us')</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">{{ config('company.address') }}</span></li>
                            <li><span class="icon icon-phone"></span><span class="text">{{ config('company.phone') }}</span></li>
                            <li><span class="icon icon-envelope"></span><span class="text">{{ config('company.email') }}</span></li>
                        </ul>
                        <div class="text-center text-lg-left">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15919.516614436056!2d9.68547922680806!3d4.045072002935148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106113224854d4df%3A0xa59117b08ca9c5dd!2sMboa%20Cutz!5e0!3m2!1sfr!2scm!4v1607225013521!5m2!1sfr!2scm" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-left">
                <p>
                    <a href="{{ locale_route('home.privacy-policy') }}">@lang('page.privacy_policy')</a> |
                    <a href="{{ locale_route('home.terms-and-conditions') }}">@lang('page.terms_and_conditions')</a>
                </p>
            </div>
            <div class="col-md-6 text-right">
                <p>
                    Copyright &copy; MBOA CUTZ 2020 | Design by
                    <a href="https://croquignolex-tikiton.dmsemergence.com/" target="_blank">Croquignolex</a>
                </p>
            </div>
        </div>
    </div>
</footer>