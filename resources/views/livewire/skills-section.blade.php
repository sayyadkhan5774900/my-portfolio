<section class="colorlib-skills" data-section="skills">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                 data-animate-effect="fadeInLeft">
                <span class="heading-meta">{{ $skillSection->heading_meta }}</span>
                <h2 class="colorlib-heading animate-box">{{ $skillSection->heading }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <p>{{ $skillSection->description }}</p>
            </div>
            @foreach($skillSection->skills as $index => $skill)
                <div class="col-md-6 animate-box" data-animate-effect="{{ $index % 2 == 0 ? 'fadeInLeft' : 'fadeInRight' }}">
                    <div class="progress-wrap">
                        <h3>{{ $skill['name'] }}</h3>
                        <div class="progress">
                            <div class="progress-bar {{ $skill['color'] }}" role="progressbar" aria-valuenow="{{ $skill['percentage'] }}"
                                 aria-valuemin="0" aria-valuemax="100" style="width:{{ $skill['percentage'] }}%">
                                <span>{{ $skill['percentage'] }}%</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
