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
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <ul class="side-nav-list">
                        <li><a href="{{ url('/service1') }}"><i class="fa fa-angle-right"></i> &nbsp;SES/請負開発 </a></li>
                        <li><a href="{{ url('/service2') }}"><i class="fa fa-angle-right"></i> &nbsp;IT導入支援 </a></li>
                        <li><a href="{{ url('/service3') }}" class="active"><i class="fa fa-angle-right"></i> &nbsp;日本留学ナビ運営 </a></li>
                        <li><a href="{{ url('/service4') }}"><i class="fa fa-angle-right"></i> &nbsp;EC事業</a></li>
                    </ul>
                </div>
                <!--end item-->

                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="col-md-12 bmargin"> <img src="{{ asset('images/ser03.jpg') }}" alt=""
                            class="img-responsive" /> <br />
                        <h5 class="uppercase less-mar1">日本留学ナビ運営</h5>
                        <div class="divider-line solid margin yellow"></div>
                        <p>日本No1の日本留学案内総合サイトです。
                            78校以上の厳選された優良な日本語学校に留学できます。<br>
                            あなたの日本での成功をお手伝いします。</p><br>
                        <a class="btn btn-yellow btn-round" href="http://www.studyjapan.info/" target="_blank">公式サイトはこちら</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
</x-guest-layout>
    {{-- <div class="clearfix"></div>
    <section class="section-fulldark sec-padding">
        <div class="container ">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="footer-logo"><img src="{{ asset('images/asia-hd_logo.png') }}" alt="" />
                    </div>
                        <ul class="address-info">
                            <li>〒171-0014 <br>
                                東京都豊島区池袋4-27-5和田ビル502号
                            </li>
                            <li><i class="fa fa-phone"></i> TEL: 03-3981-5090 （代表）</li>
                            <li><i class="fa fa-fax"></i> Fax: 03-3981-5092</li>
                            <li class="last"><i class="fa fa-envelope"></i> Email: info@asia-hd.com</li>
                        </ul>
                    </div>
                <!--end item-->

                <div class="col-md-1 clearfix"></div>

                <div class="col-md-3 clearfix">
                    <h4 class="uppercase footer-title less-mar3">会社情報</h4>
                    <div class="clearfix"></div>
                    <div class="footer-title-bottomstrip"></div>
                    <ul class="usefull-links yellow">
                        <li><a href="{{ url('/') }}"><i class="fa fa-angle-right"></i>HOME</a></li>
                        <li><a href="{{ url('/about') }}"><i class="fa fa-angle-right"></i>会社概要</a></li>
                        <li><a href="{{ url('/project') }}"><i class="fa fa-angle-right"></i>開発実績</a></li>
                        <li><a href="{{ url('/service1') }}"><i class="fa fa-angle-right"></i>サービス案内</a></li>
                    </ul>
                </div>
                <!--end item-->

                <div class="col-md-1 clearfix"></div>

                <div class="col-md-3 clearfix">
                    <h4 class="uppercase footer-title less-mar3">その他</h4>
                    <div class="clearfix"></div>
                    <div class="footer-title-bottomstrip"></div>
                    <ul class="usefull-links yellow">
                        <li><a href="{{ url('/news') }}"><i class="fa fa-angle-right"></i>新着情報</a></li>
                        <li><a href="{{ url('/recruit') }}"><i class="fa fa-angle-right"></i>採用情報</a></li>
                        <li><a href="{{ url('/contact') }}"><i class="fa fa-angle-right"></i>お問合せ</a></li>
                        <li><a href="{{ url('/privacy') }}"><i class="fa fa-angle-right"></i>プライバシーポリシー</a></li>
                    </ul>
                </div>
                <!--end item-->
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class="section-copyrights sec-moreless-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>Copyright Asia Human Development, Inc. all rights reserved</span>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <a href="#" class="scrollup yellow"></a><!-- end scroll to top of the page-->
    </div>
<!-- end site wraper -->


<!-- ============ JS FILES ============ -->
<script type="text/javascript" src="{{ asset('js/universal/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jFlickrFeed/jflickrfeed.min.js') }}"></script>
<script src="{{ asset('js/mainmenu/customeUI.js') }}"></script>
<script src="{{ asset('js/mainmenu/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/scrolltotop/totop.js') }}"></script>
<script src="{{ asset('js/scripts/functions.js') }}" type="text/javascript"></script>
</body>
</html>

 --}}
