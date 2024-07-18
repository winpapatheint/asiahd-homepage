<x-guest-layout>
    <section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase">製品一覧</h4>
                <h5 class="text-white uppercase">Products</h5>
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
                        <h3>Products</h3>
                    </div>

                    <div class="col-md-6 text-right">
                        <div class="pagenation_links">Home <i>/</i> Products
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
                    <h4 class="section-title uppercase">製品一覧</h4>
                    <div class="title-line-8 yellow left"></div>
                    <p>企業様向けにカスタマイズ可能な様々なソフトウェアシステムを用意しております。<br />
                        システム導入については、気軽にお問い合わせください。</p>
                    <br />
                </div>
                <div class="clearfix"></div>

                <div class="demo-full-width bmargin">
                    <div id="grid-container" class="cbp">
                        @foreach ($projects as $item)
                            <div class="cbp-item identity logos">
                                <a href="{{ route('project.show', ['id' => $item->id]) }}" class="cbp-caption"
                                    data-title="Suspendisse Imperdiet<br>by Codelayers">
                                    <div class="cbp-caption-defaultWrap">
                                        <img id="uniform-size" src="{{ asset('images/' . $item->image) }}" class="img-responsive">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignLeft">
                                            <div class="cbp-l-caption-body" style="text-align: center;">
                                                <div class="cbp-l-caption-title">{{ $item->title }}</div>
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
