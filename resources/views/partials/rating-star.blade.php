@if($rate % 2 === 0)
    @for($i = 0; $i < $rate; $i += 2)
        <span class="icon-star"></span>
    @endfor
    @for($i = 0; $i < 10 - $rate; $i += 2)
        <span class="icon-star-o"></span>
    @endfor
@else
    @for($i = 0; $i < $rate - 1; $i += 2)
        <span class="icon-star"></span>
    @endfor
    <span class="icon-star-half-o"></span>
    @for($i = 0; $i < 10 - $rate - 1; $i += 2)
        <span class="icon-star-o"></span>
    @endfor
@endif
