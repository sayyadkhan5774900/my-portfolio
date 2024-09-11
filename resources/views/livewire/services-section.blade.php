<section class="colorlib-services" data-section="services">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                 data-animate-effect="fadeInLeft">
                <span class="heading-meta">{{ $serviceSection->heading_meta }}</span>
                <h2 class="colorlib-heading">{{ $serviceSection->heading }}</h2>
            </div>
        </div>
        <div class="row row-pt-md">
            @foreach($serviceSection->services as $service)
                <div class="col-md-4 text-center animate-box">
                    <div class="services {{ $service['color_class'] }}">
                        <span class="icon">
                            <i class="{{ $service['icon'] }}"></i>
                        </span>
                        <div class="desc">
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
