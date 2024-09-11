<div>
    @if($about)
        <section class="colorlib-about" data-section="about">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="col-md-12">
                                <div class="about-desc">
                                    <span class="heading-meta">{{ $about->heading_meta }}</span>
                                    <h2 class="colorlib-heading">{{ $about->heading }}</h2>
                                    <p>{!! $about->description !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($about->services as $service)
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                                    <div class="services {{ $service['color_class'] }}">
                                        <span class="icon2"><i class="{{ $service['icon'] }}"></i></span>
                                        <h3>{{ $service['title'] }}</h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <div class="hire">
                                    <h2>{!! $about->hire_heading !!}</h2>
                                    <a href="{{ $about->hire_button_link }}"
                                       class="btn-hire">{{ $about->hire_button_text }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endifÏ
</div>
