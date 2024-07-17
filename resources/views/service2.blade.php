<x-guest-layout>
    <section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase">サービス案内</h4>
                <h5 class="text-white uppercase">Services</h5>
            </div>
            <div class="overlay bg-opacity-5"></div>
            <img src="{{ asset('images/service.jpg') }}" alt="" class="img-responsive" />
        </div>
    </section>
    <!-- end header inner -->
    <div class="clearfix"></div>

    <section>
        <div class="pagenation-holder">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Services</h3>
                    </div>

                    <div class="col-md-6 text-right">
                        <div class="pagenation_links">Home <i>/</i> Services</div>
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
                <div class="col-md-3 col-sm-12 col-xs-12 bmargin">
                    <ul class="side-nav-list">
                        <li><a href="{{ url('/service1') }}"><i class="fa fa-angle-right"></i> &nbsp;SES/請負開発 </a></li>
                        <li><a href="{{ url('/service2') }}" class="active"><i class="fa fa-angle-right"></i> &nbsp;IT導入支援 </a></li>
                        <li><a href="{{ url('/service3') }}"><i class="fa fa-angle-right"></i> &nbsp;日本留学ナビ運営 </a></li>
                        <li><a href="{{ url('/service4') }}"><i class="fa fa-angle-right"></i> &nbsp;EC事業</a></li>
                    </ul>
                </div>
                <!--end item-->

                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="col-md-12 bmargin"> <img src="{{ asset('images/ser02.jpg') }}" alt=""
                            class="img-responsive" /> <br />
                        <h5 class="uppercase less-mar1">IT導入支援</h5>
                        <div class="divider-line solid margin yellow"></div>
                        <p>弊社独自で開発したシステムをカスタマイズし、手ごろな価格で企業様にご提供させていただきます。</p><br>

                        <h5 class="text-yellow">弊社システム一覧</h5>
                        <div class="service">
                            <div class="col-left">・オンライン教室システム</div>
                            <div class="col-left">・IBT試験システム </div>
                            <div class="col-left">・受発注システム</div>
                            <div class="col-left">・中古品販売システム</div>
                            <div class="col-left">・求人/求職システム</div>
                            <div class="col-left">・予約システム</div>
                            <div class="col-left">・顧客管理システム</div>
                            <div class="col-left">・ECサイト/ECモール</div>
                            <div class="col-left">・EngQ英語</div>
                        </div>
                    </div>
                    <!--end item-->
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
</x-guest-layout>
