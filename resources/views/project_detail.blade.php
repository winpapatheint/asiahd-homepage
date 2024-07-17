<x-guest-layout>
    <section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase">開発実績</h4>
                <h5 class="text-white uppercase">Projects</h5>
            </div>
            <div class="overlay bg-opacity-5"></div>
            <img src="{{ asset('images/project.jpg') }}" alt="" class="img-responsive" />
        </div>
    </section>
    <!-- end header inner -->
    <div class="clearfix"></div>

    <section>
        <div class="pagenation-holder">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Projects</h3>
                    </div>

                    <div class="col-md-6 text-right">
                        <div class="pagenation_links">Home <i>/</i> Projects
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class="sec-padding">
        <div class="container">
            <div class="row">
                <h4 class="section-title uppercase">{{ $project->title }}</h4>
                <div class="title-line-8 yellow left"></div>
                <div class="col-md-12">
                    <img id="img-detail" src="{{ asset('images/' . $project->image) }}" class="img-responsive">
                    <br />
                    <h5 class="uppercase less-mar1">詳細</h5>
                    <div class="divider-line solid margin yellow"></div>
                    <p>{!! nl2br(e($project->content)) !!}</p>
                </div>
                <!--end item-->
            </div>
        </div>
    </section>
    <!--end section-->
</x-guest-layout>
