<x-guest-layout>
    <div id="header">
        <div class="container">
            <div class="navbar yellow navbar-default yamm">
                <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('images/asia-hd_logo.png') }}" alt=""/></a> </div>
                <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
                <ul class="nav yellow navbar-nav">
                    <li> <a href="{{ url('/') }}" class="dropdown-toggle">Home</a></li>
                    <li> <a href="{{ url('/about') }}" class="dropdown-toggle">会社概要</a></li>
                    <li> <a href="{{ url('/project') }}" class="dropdown-toggle">開発実績</a></li>
                    <li class="dropdown">
                        <a href="{{ url('/service') }}" class="dropdown-toggle active">サービス案内</a>
                        <ul class="dropdown-menu five" role="menu">
                            <li><a href="{{ url('/service1') }}">SES/請負開発</a></li>
                            <li><a href="{{ url('/service2') }}">IT導入支援</a></li>
                            <li><a href="{{ url('/service3') }}">日本留学ナビ運営</a></li>
                            <li><a href="{{ url('/service4') }}">EC事業</a></li>
                        </ul>
                    </li>
                    <li> <a href="{{ url('/news') }}" class="dropdown-toggle">新着情報</a></li>
                    <li> <a href="{{ url('/recruit') }}" class="dropdown-toggle">採用情報</a></li>
                    <li> <a href="{{ url('/contact') }}" class="dropdown-toggle">お問合せ</a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end menu-->
    <div class="clearfix"></div>

    <section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase">Services</h4>
                <h5 class="text-white uppercase">Get many More Features</h5>
            </div>
            <div class="overlay bg-opacity-5"></div>
            <img src="http://placehold.it/1920x600" alt="" class="img-responsive" />
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
                        <div class="pagenation_links"><a href="index.html">Home</a> <i>/</i> Services</div>
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
                        <li><a class="active" href="{{ url('/service') }}"><i class="fa fa-angle-right"></i> &nbsp; All
                                Services</a></li>
                        <li><a href="{{ url('/service1') }}"><i class="fa fa-angle-right"></i> &nbsp;SES/請負開発 </a></li>
                        <li><a href="{{ url('/service2') }}"><i class="fa fa-angle-right"></i> &nbsp;IT導入支援 </a></li>
                        <li><a href="{{ url('/service3') }}"><i class="fa fa-angle-right"></i> &nbsp;日本留学ナビ運営 </a></li>
                        <li><a href="{{ url('/service4') }}"><i class="fa fa-angle-right"></i> &nbsp;ECモール運営</a></li>
                    </ul>
                </div>
                <!--end item-->

                <div class="col-md-9 col-sm-12 col-xs-12 bmargin">
                    <div class="col-md-6 bmargin"> <img src="http://placehold.it/400x250" alt=""
                            class="img-responsive" /> <br />
                        <h5 class="uppercase less-mar1">SES/請負開発</h5>
                        <div class="divider-line solid margin yellow"></div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit Suspendisse et justo Praesent
                            mattis commodo augue Aliquam ornare augue. </p>
                        <br />
                        <a class="btn lesspadd btn-yellow less-round" href="{{ url('/service1') }}">Read more</a>
                    </div>
                    <!--end item-->

                    <div class="col-md-6 bmargin"> <img src="http://placehold.it/400x250" alt=""
                            class="img-responsive" /> <br />
                        <h5 class="uppercase less-mar1">IT導入支援</h5>
                        <div class="divider-line solid margin yellow"></div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit Suspendisse et justo Praesent
                            mattis commodo augue Aliquam ornare augue. </p>
                        <br />
                        <a class="btn lesspadd btn-yellow less-round" href="{{ url('/service2') }}">Read more</a>
                    </div>
                    <!--end item-->

                    <div class="clearfix"></div>
                    <br /><br />

                    <div class="col-md-6 bmargin"> <img src="http://placehold.it/400x250" alt=""
                            class="img-responsive" /> <br />
                        <h5 class="uppercase less-mar1">日本留学ナビ運営</h5>
                        <div class="divider-line solid margin yellow"></div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit Suspendisse et justo Praesent
                            mattis commodo augue Aliquam ornare augue. </p>
                        <br />
                        <a class="btn lesspadd btn-yellow less-round" href="{{ url('/service3') }}">Read more</a>
                    </div>
                    <!--end item-->

                    <div class="col-md-6 bmargin"> <img src="http://placehold.it/400x250" alt=""
                            class="img-responsive" /> <br />
                        <h5 class="uppercase less-mar1">EC事業</h5>
                        <div class="divider-line solid margin yellow"></div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit Suspendisse et justo Praesent
                            mattis commodo augue Aliquam ornare augue. </p>
                        <br />
                        <a class="btn lesspadd btn-yellow less-round" href="{{ url('/service4') }}">Read more</a>
                    </div>
                    <!--end item-->
                </div>
                <!--end item-->
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>
</x-guest-layout>
