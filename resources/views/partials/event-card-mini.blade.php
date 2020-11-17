<div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" href="{{ locale_route('events.index') }}">
        <img src="{{ $event->image_src }}" alt="...">
    </a>
    <div class="text">
        <h3 class="heading">
            <a href="{{ locale_route('events.index') }}">
                {{ text_format($event->name, 20) }}
            </a>
        </h3>
        <div class="meta">
            <div><span class="icon-calendar"></span> {{ $event->start_date }}</div>
            <div><span class="icon-map-marker"></span> {{ $event->localisation }}</div>
        </div>
    </div>
</div>