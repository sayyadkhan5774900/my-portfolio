<div id="colorlib-counter" class="colorlib-counters"
     style="background-image: url({{ asset($counterSection->background_image) }});"
     data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="colorlib-narrow-content">
        <div class="row">
        </div>
        <div class="row">
            @foreach($counterSection->counters as $counter)
                <div class="col-md-3 text-center animate-box">
                    <span class="colorlib-counter js-counter" data-from="0" data-to="{{ $counter['data_to'] }}" data-speed="{{ $counter['data_speed'] }}"
                          data-refresh-interval="{{ $counter['data_refresh_interval'] }}"></span>
                    <span class="colorlib-counter-label">{{ $counter['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
