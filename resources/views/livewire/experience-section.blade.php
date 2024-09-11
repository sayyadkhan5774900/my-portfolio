<section class="colorlib-experience" data-section="experience">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                 data-animate-effect="fadeInLeft">
                <span class="heading-meta">{{ $experienceSection->heading_meta }}</span>
                <h2 class="colorlib-heading animate-box">{{ $experienceSection->heading }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="timeline-centered">
                    @foreach($experienceSection->experiences as $index => $experience)
                        <article class="timeline-entry animate-box" data-animate-effect="{{ $index % 2 == 0 ? 'fadeInLeft' : 'fadeInRight' }}">
                            <div class="timeline-entry-inner">
                                <div class="timeline-icon {{ $experience['color'] }}">
                                    <i class="{{ $experience['icon'] }}"></i>
                                </div>
                                <div class="timeline-label">
                                    <h2><a href="#">{{ $experience['title'] }}</a> <span>{{ $experience['duration'] }}</span></h2>
                                    <h4><a href="#">{{ $experience['company'] }}</a></h4>
                                    <p>{{ $experience['description'] }}</p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon color-none">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
