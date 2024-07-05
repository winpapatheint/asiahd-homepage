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
                        <a href="{{ url('/service') }}">サービス案内</a>
                        <ul class="dropdown-menu five" role="menu">
                            <li><a href="{{ url('/service1') }}">SES/請負開発</a></li>
                            <li><a href="{{ url('/service2') }}">IT導入支援</a></li>
                            <li><a href="{{ url('/service3') }}">日本留学ナビ運営</a></li>
                            <li><a href="{{ url('/service4') }}">EC事業</a></li>
                        </ul>
                    </li>
                    <li> <a href="{{ url('/news') }}" class="dropdown-toggle active">新着情報</a></li>
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
                <h4 class="title text-white uppercase">新着情報</h4>
                <h5 class="text-white uppercase">News</h5>
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
                        <h3>News</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="pagenation_links"><a href="index.html">Home</a> <i>/</i> News</div>
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

                <div class="col-md-6 bmargin"> <img src="http://placehold.it/600x400" alt=""
                        class="img-responsive" /> <br />
                </div>
                <!--end item-->

                <div class="col-md-6 bmargin">

                    <h5 class="uppercase less-mar1 nopadding">Consluting</h5>
                    <div class="divider-line solid margin yellow"></div>

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent
                        mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a
                        est. Curabitur eget orci.</p>
                    <br />
                    <ul class="iconlist yellow">
                        <li><i class="fa fa-arrow-circle-right"></i> Nullam turpis Cras dapibus orci rutrum
                        </li>
                        <li><i class="fa fa-arrow-circle-right"></i> Etiam enim Suspendisse imperdiet cursus
                            nisi Maecenas </li>
                        <li><i class="fa fa-arrow-circle-right"></i> Sed massa tellus aliquam rhoncus venenatis
                            quis. </li>
                        <li><i class="fa fa-arrow-circle-right"></i> Praesent odio tellus posuere sed dictum
                            sed fermentum. </li>
                        <li><i class="fa fa-arrow-circle-right"></i> Etiam enim Suspendisse imperdiet cursus
                            nisi </li>
                    </ul>

                </div>
                <!--end item-->

                <div class="clearfix"></div>
                <br /><br />

                <div class="col-md-6 bmargin"> <img src="http://placehold.it/600x400" alt=""
                        class="img-responsive" /> <br />
                </div>
                <!--end item-->

                <div class="col-md-6 bmargin">

                    <h5 class="uppercase less-mar1 nopadding">Architecture</h5>
                    <div class="divider-line solid margin yellow"></div>

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent
                        mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a
                        est. Curabitur eget orci.</p>
                    <br />
                    <ul class="iconlist yellow">
                        <li><i class="fa fa-arrow-circle-right"></i> Nullam turpis Cras dapibus orci rutrum
                        </li>
                        <li><i class="fa fa-arrow-circle-right"></i> Etiam enim Suspendisse imperdiet cursus
                            nisi Maecenas </li>
                        <li><i class="fa fa-arrow-circle-right"></i> Sed massa tellus aliquam rhoncus venenatis
                            quis. </li>
                        <li><i class="fa fa-arrow-circle-right"></i> Praesent odio tellus posuere sed dictum
                            sed fermentum. </li>
                        <li><i class="fa fa-arrow-circle-right"></i> Etiam enim Suspendisse imperdiet cursus
                            nisi </li>
                    </ul>

                </div>
                <!--end item-->
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>
</x-guest-layout>
