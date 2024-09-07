<section id="colorlib-hero" class="js-fullheight" data-section="home">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            @foreach(App\Models\HeroSection::where('status', true)->get() as $hero)
                <li style="background-image: url({{ asset('storage/' . $hero->background_image) }});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                <div class="slider-text-inner js-fullheight">
                                    <div class="desc">
                                        <h1>{!! $hero->title !!}</h1>
                                        <h2>{!! $hero->subtitle !!}</h2>
                                        <p><a class="btn btn-primary btn-learn" href="{{ $hero->button_link }}">{{ $hero->button_text }} <i class="{{ $hero->button_icon }}"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
