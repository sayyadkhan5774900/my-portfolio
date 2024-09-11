<section class="colorlib-education" data-section="education">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                 data-animate-effect="fadeInLeft">
                <span class="heading-meta">{{ $educationSection->heading_meta }}</span>
                <h2 class="colorlib-heading animate-box">{{ $educationSection->heading }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <div class="fancy-collapse-panel">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        @foreach($educationSection->educations as $index => $education)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading{{ $index }}">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $index }}"
                                           aria-expanded="true" aria-controls="collapse{{ $index }}">
                                            {{ $education['degree'] }} in {{ $education['field'] }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{ $index }}" class="panel-collapse collapse {{ $index === 0 ? 'in' : '' }}" role="tabpanel"
                                     aria-labelledby="heading{{ $index }}">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>{!! $education['description'] !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
