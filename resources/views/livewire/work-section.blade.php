<section class="colorlib-work" data-section="work">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                 data-animate-effect="fadeInLeft">
                <span class="heading-meta">{{ $workSection->heading_meta }}</span>
                <h2 class="colorlib-heading animate-box">{{ $workSection->heading }}</h2>
            </div>
        </div>
        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
            <div class="col-md-12">
                <p class="work-menu">
                    <span><a href="#" class="active">Graphic Design</a></span>
                    <span><a href="#">Web Design</a></span>
                    <span><a href="#">Software</a></span>
                    <span><a href="#">Apps</a></span>
                </p>
            </div>
        </div>
        <div class="row">
            @foreach($workSection->works as $index => $work)
                <div class="col-md-6 animate-box" data-animate-effect="{{ $index % 2 == 0 ? 'fadeInLeft' : 'fadeInRight' }}">
                    <div class="project" style="background-image: url({{ asset($work['image']) }});">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="{{ $work['link'] }}">{{ $work['title'] }}</a></h3>
                                <span>{{ $work['category'] }}</span>
                                <p class="icon">
                                    <span><a href="#"><i class="{{ $work['icon_share'] }}"></i></a></span>
                                    <span><a href="#"><i class="{{ $work['icon_eye'] }}"></i> {{ $work['views'] }}</a></span>
                                    <span><a href="#"><i class="{{ $work['icon_heart'] }}"></i> {{ $work['likes'] }}</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12 animate-box">
                <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
            </div>
        </div>
    </div>
</section>
