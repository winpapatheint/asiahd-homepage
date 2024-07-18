<x-guest-layout>
    <section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase" style="margin-top: 10px">サービス案内</h4>
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
                        <li><a href="{{ url('/service2') }}"><i class="fa fa-angle-right"></i> &nbsp;IT導入支援 </a></li>
                        <li><a href="{{ url('/service3') }}"><i class="fa fa-angle-right"></i> &nbsp;日本留学ナビ運営 </a></li>
                        <li><a href="{{ url('/service4') }}" class="active"><i class="fa fa-angle-right"></i>
                                &nbsp;EC事業</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-12 col-xs-12 bmargin">

                    <div class="col-md-6 bmargin"> <img src="{{ asset('images/ser04-1.jpg') }}" alt=""
                            class="img-responsive" /> <br />
                        <h5 class="uppercase less-mar1">EC/ECモール構築</h5>
                        <div class="divider-line solid margin yellow"></div>
                        <p>業種別の各種ECサイトやECモールを構築しております。
                            ECサイトやECモールの構築については、気軽にお問い合わせください。</p>
                        <br />
                    </div>

                    <div class="col-md-6 bmargin"> <img src="{{ asset('images/ser04-2.jpg') }}" alt=""
                            class="img-responsive" /> <br />
                        <h5 class="uppercase less-mar1">HP制作</h5>
                        <div class="divider-line solid margin yellow"></div>
                        <p>お客様の要望に応じて、各種ホームページを制作しております。
                            ホームページの制作については、気軽にお問い合わせください。</p>
                        <br />
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-6 bmargin"><img src="{{ asset('images/ser04-3.jpg') }}" alt=""
                            class="img-responsive" /><br />
                        <h5 class="uppercase less-mar1">アジア食彩館ECモール</h5>
                        <div class="divider-line solid margin yellow"></div>
                        <p>日本国内の340万外国人消費者に向けにアジア食品関連商品を販売するECモールです。<br>
                            販売者の出店は無料です。</p>
                        <br />
                        <a class="btn btn-yellow btn-round" href="https://asian-food.site/"
                            target="_blank">公式サイトはこちら</a>
                    </div>
                    <!--end item-->

                    <div class="col-md-6 bmargin"> <img src="{{ asset('images/ser04-4.jpg') }}" alt=""
                            class="img-responsive" /><br />
                        <h5 class="uppercase less-mar1">New Style Life（新生活）ECモール</h5>
                        <div class="divider-line solid margin yellow"></div>
                        <p>日本国内の消費者向けに食品以外の商品を販売するECモールです。<br>
                            販売者の出店は無料です。</p>
                        <br />
                        <a class="btn btn-yellow btn-round" href="https://new-style.life/" target="_blank">公式サイトはこちら</a>
                    </div>
                    <!--end item-->
                </div>
                <!--end item-->
            </div>
        </div>
    </section>
    <!--end section-->
</x-guest-layout>
