<div class="col-md-4 d-flex ftco-animate">
    <div class="services-wrap d-flex">
        <a href="{{ $service->image_src }}" class="{{ $style_class }} image-popup" style="background-image: url({{ $service->image_src }});"></a>
        <div class="text p-4">
            <h3>{{ $service->name }}</h3>
            <p>{{ text_format($service->description, 80) }}</p>
            <span class="text-theme">
                 @if($service->is_a_discount)
                    {{ amount_format($service->amount) }}
                    <small><s>{{ amount_format($service->price) }}</s></small>
                @else
                    {{ amount_format($service->price) }}
                @endif
            </span>
        </div>
    </div>
</div>