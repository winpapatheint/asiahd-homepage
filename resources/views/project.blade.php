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
                <div class="col-sm-12 text-left nopadding">
                    <h4 class="section-title uppercase">開発実績</h4>
                    <div class="title-line-8 yellow left"></div>
                    <p>企業様向けにカスタマイズ可能な様々なソフトウェアシステムを用意しております。<br />
                        システム導入については、気軽にお問い合わせください。</p>
                    <br />
                </div>
                <div class="clearfix"></div>

                <div class="demo-full-width bmargin">
                    <div id="grid-container" class="cbp">
                        @foreach ($variable as $key => $value)
                            <div class="cbp-item identity logos">
                                <a href="{{ url('/project1') }}" class="cbp-caption"
                                    data-title="Suspendisse Imperdiet<br>by Codelayers">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="http://placehold.it/1000x800" alt="">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignLeft">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-title">オンライン教室システム</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
</x-guest-layout>
