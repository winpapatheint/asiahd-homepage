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
                        <a href="{{ url('/service1') }}">サービス案内</a>
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
            <img src="{{ asset('images/news.jpg') }}" alt="" class="img-responsive" />
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
                <div class="col-md-6">
                    <div class="blog-holder6 bmargin">
                        <div class="post-date-box"> 25 <span>05, 2020</span> </div>
                        <img src="https://media.istockphoto.com/id/1411389613/photo/treelined-footpath-in-morning-fog-in-autumn-colored-forest.webp?b=1&s=170667a&w=0&k=20&c=SZhH4WCyCs24s1r00enpgmRGoP1zs-nx_p1Lakpv6-0=" alt="" class="img-responsive" />
                    </div>
                </div>

                <div class="col-md-6 bmargin">
                    <h5 class="uppercase less-mar1 nopadding">Consluting</h5>
                    <div class="divider-line solid margin yellow"></div>

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent
                        mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a
                        est. Curabitur eget orci.</p>
                    <br />
                    <ul class="iconlist yellow">
                        <li><i class="fa fa-arrow-circle-right"></i> Nullam turpis Cras dapibus orci rutrum</li>
                        <li><i class="fa fa-arrow-circle-right"></i> Etiam enim Suspendisse imperdiet cursus
                            nisi Maecenas </li>
                        <li><i class="fa fa-arrow-circle-right"></i> Sed massa tellus aliquam rhoncus venenatis
                            quis. </li>
                    </ul>
                </div>
                <!--end item-->

                <div class="clearfix"></div>
                <br /><br />

                <div class="col-md-6">
                    <div class="blog-holder6 bmargin">
                        <div class="post-date-box"> 25 <span>05, 2020</span> </div>
                        <img src="https://media.istockphoto.com/id/1411389613/photo/treelined-footpath-in-morning-fog-in-autumn-colored-forest.webp?b=1&s=170667a&w=0&k=20&c=SZhH4WCyCs24s1r00enpgmRGoP1zs-nx_p1Lakpv6-0=" alt="" class="img-responsive" />
                    </div>
                </div>

                <div class="col-md-6 bmargin">
                    <h5 class="uppercase less-mar1 nopadding">Consluting</h5>
                    <div class="divider-line solid margin yellow"></div>

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent
                        mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a
                        est. Curabitur eget orci.</p>
                    <br />
                    <ul class="iconlist yellow">
                        <li><i class="fa fa-arrow-circle-right"></i> Nullam turpis Cras dapibus orci rutrum</li>
                        <li><i class="fa fa-arrow-circle-right"></i> Etiam enim Suspendisse imperdiet cursus
                            nisi Maecenas </li>
                        <li><i class="fa fa-arrow-circle-right"></i> Sed massa tellus aliquam rhoncus venenatis
                            quis. </li>
                    </ul>
                </div>
                <!--end item-->
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>
</x-guest-layout>
