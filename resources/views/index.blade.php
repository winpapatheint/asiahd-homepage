<!doctype html>
<html lang="en">

<head>
    <title>Asia Human Development, Inc.</title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/asiahd_slogo.png') }}">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet'
        type='text/css'>
    <link href='https://www.google.com/fonts#UsePlace:use/Collection:Droid+Serif:400,400italic,700,700italic'
        rel='stylesheet' type='text/css'>
    <link
        href='https://www.google.com/fonts#UsePlace:use/Collection:Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic'
        rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <!-- Stylesheets -->
    <link rel="stylesheet" media="screen" href="{{ asset('js/bootstrap/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('js/mainmenu/menu.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/default.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/shortcodes.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('css/responsive-leyouts.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('js/masterslider/style/masterslider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('js/cubeportfolio/cubeportfolio.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Simple-Line-Icons-Webfont/simple-line-icons.css') }}"
        media="screen" />
    <link rel="stylesheet" href="{{ asset('css/et-line-font/et-line-font.css') }}">
    <link href="{{ asset('js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/tabs/assets/css/responsive-tabs.css') }}">
    <link rel="stylesheet" href="{{ asset('js/jFlickrFeed/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('js/smart-forms/smart-forms.css') }}">
</head>

<body>
    <div class="site_wrapper">
        <div class="topbar dark topbar-padding">
            <div class="container">
                <div class="topbar-left-items">
                    <ul class="toplist toppadding pull-left paddtop1">
                        <li class="rightl"><i class="fa fa-phone"></i>03-3981-5090</li>
                        <li><i class="fa fa-envelope"></i>info@asia-hd.com</li>
                    </ul>
                </div>
                <!--end left-->

                <div class="topbar-right-items pull-right">
                    <ul class="toplist toppadding">
                        <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                        <li class="last"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div id="header">
            <div class="container">
                <div class="navbar yellow navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid"
                            class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span
                                class="icon-bar"></span></button>
                        <a href="{{ url('/') }}" class="navbar-brand"><img
                                src="{{ asset('images/asia-hd_logo.png') }}" alt="" /></a>
                    </div>
                    <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
                        <ul class="nav yellow navbar-nav">
                            <li> <a href="{{ url('/') }}" class="dropdown-toggle active">Home</a></li>
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

        <!-- masterslider -->
        <div class="master-slider ms-skin-default" id="masterslider">

            <!-- slide 1 -->
            <div class="ms-slide slide-1" data-delay="9">
                <div class="slide-pattern"></div>
                <img src="{{ asset('js/masterslider/blank.gif') }}" data-src="{{ asset('images/topsl01.jpg') }}"
                    alt="" />

                <h3 class="ms-layer text15" style="top: 220px; left:230px;" data-type="text" data-delay="500"
                    data-ease="easeOutExpo" data-duration="1230" data-effect="scale(1.5,1.6)"> Building</h3>

                <h3 class="ms-layer text16" style="top: 280px; left:230px;" data-type="text" data-delay="1000"
                    data-ease="easeOutExpo" data-duration="1230" data-effect="scale(1.5,1.6)"> your visions</h3>

                <h3 class="ms-layer text17" style="top: 330px; left:230px;" data-type="text" data-effect="top(45)"
                    data-duration="2000" data-delay="1500" data-ease="easeOutExpo"> Lorem ipsum dolor sit amet
                    consectetuer
                    adipiscing elit Suspendisse et justo <br />
                    Praesent mattis commodo augue Aliquam ornare. </h3>

                <a class="ms-layer sbut6 yellow" style="left: 230px; top: 400px;" data-type="text" data-delay="2000"
                    data-ease="easeOutExpo" data-duration="1200" data-effect="scale(1.5,1.6)"> SES/請負開発 </a>
            </div>
            <!-- end slide 1 -->

            <!-- slide 2 -->
            <div class="ms-slide slide-2" data-delay="9">
                <div class="slide-pattern"></div>
                <img src="{{ asset('js/masterslider/blank.gif') }}" data-src="images/topsl02.jpg" alt="" />

                <h3 class="ms-layer text15" style="top: 220px; right:230px;" data-type="text" data-delay="500"
                    data-ease="easeOutExpo" data-duration="1230" data-effect="scale(1.5,1.6)"> Building</h3>

                <h3 class="ms-layer text16" style="top: 280px; right:230px;" data-type="text" data-delay="1000"
                    data-ease="easeOutExpo" data-duration="1230" data-effect="scale(1.5,1.6)"> your visions</h3>

                <h3 class="ms-layer text7" style="top: 330px; right:230px;" data-type="text" data-effect="top(45)"
                    data-duration="2000" data-delay="1500" data-ease="easeOutExpo"> Lorem ipsum dolor sit amet
                    consectetuer adipiscing elit Suspendisse et justo <br />
                    Praesent mattis commodo augue Aliquam ornare. </h3>

                <a class="ms-layer sbut6 yellow" style="right: 230px; top: 400px;" data-type="text"
                    data-delay="2000" data-ease="easeOutExpo" data-duration="1200" data-effect="scale(1.5,1.6)">
                    IT導入支援 </a>
            </div>
            <!-- end slide 2 -->

            <!-- slide 3 -->
            <div class="ms-slide slide-1" data-delay="9">
                <div class="slide-pattern"></div>
                <img src="{{ asset('js/masterslider/blank.gif') }}" data-src="{{ asset('images/topsl03.jpg') }}"
                    alt="" />

                <h3 class="ms-layer text15" style="top: 220px; left:230px;" data-type="text" data-delay="500"
                    data-ease="easeOutExpo" data-duration="1230" data-effect="scale(1.5,1.6)"> Building</h3>

                <h3 class="ms-layer text16" style="top: 280px; left:230px;" data-type="text" data-delay="1000"
                    data-ease="easeOutExpo" data-duration="1230" data-effect="scale(1.5,1.6)"> your visions</h3>

                <h3 class="ms-layer text17" style="top: 330px; left:230px;" data-type="text" data-effect="top(45)"
                    data-duration="2000" data-delay="1500" data-ease="easeOutExpo"> Lorem ipsum dolor sit amet
                    consectetuer
                    adipiscing elit Suspendisse et justo <br />
                    Praesent mattis commodo augue Aliquam ornare. </h3>

                <a class="ms-layer sbut6 yellow" style="left: 230px; top: 400px;" data-type="text" data-delay="2000"
                    data-ease="easeOutExpo" data-duration="1200" data-effect="scale(1.5,1.6)"> 日本留学ナビ運営 </a>
            </div>
            <!-- end slide 3 -->

            <!-- slide 4 -->
            <div class="ms-slide slide-2" data-delay="9">
                <div class="slide-pattern"></div>
                <img src="{{ asset('js/masterslider/blank.gif') }}" data-src="images/topsl04.jpg" alt="" />

                <h3 class="ms-layer text15" style="top: 220px; right:230px;" data-type="text" data-delay="500"
                    data-ease="easeOutExpo" data-duration="1230" data-effect="scale(1.5,1.6)"> Building</h3>

                <h3 class="ms-layer text16" style="top: 280px; right:230px;" data-type="text" data-delay="1000"
                    data-ease="easeOutExpo" data-duration="1230" data-effect="scale(1.5,1.6)"> your visions</h3>

                <h3 class="ms-layer text7" style="top: 330px; right:230px;" data-type="text" data-effect="top(45)"
                    data-duration="2000" data-delay="1500" data-ease="easeOutExpo"> Lorem ipsum dolor sit amet
                    consectetuer adipiscing elit Suspendisse et justo <br />
                    Praesent mattis commodo augue Aliquam ornare. </h3>

                <a class="ms-layer sbut6 yellow" style="right: 230px; top: 400px;" data-type="text"
                    data-delay="2000" data-ease="easeOutExpo" data-duration="1200" data-effect="scale(1.5,1.6)">
                    EC事業 </a>
            </div>
            <!-- end slide 4 -->
        </div>
        <!-- end of masterslider -->
        <div class="clearfix"></div>

        <section class="section-yellow section-less-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h3 class="text-white less-mar3">情熱と技術が国境を越え、グローバル展開へ！</h3>
                        <p class="text-white">様々な経験者・技術者が、国境を越え技術を集結し挑戦して参ります。</p>
                    </div>
                    {{-- <div class="col-md-3">
                <div class="margin-top2"></div>
                <a class="btn btn-border white btn-large pull-right" href="#">Read more</a>
            </div> --}}
                </div>
            </div>
        </section>
        <!--end section-->
        <div class="clearfix"></div>

        <section class="sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 bmargin"> <img src="http://placehold.it/400x250" alt=""
                            class="img-responsive" /> <br />
                        <h5 class="uppercase less-mar1">SES/請負開発</h5>
                        <div class="divider-line solid yellow margin"></div>
                        <p>ソフト開発において、顧客のニーズにマッチする実践力のあ るエンジニアをご提案します。</p>
                        <br />
                        {{-- <a class="btn btn-yellow btn-round">Read more</a> --}}
                    </div>
                    <!--end item-->

                    <div class="col-md-4 bmargin"> <img src="http://placehold.it/400x250" alt=""
                            class="img-responsive" /> <br />
                        <h5 class="uppercase less-mar1">IT導入支援</h5>
                        <div class="divider-line solid yellow margin"></div>
                        <p>弊社保有のITパッケージを手ごろな価格で中小企業に提供し、 中小企業の売上向上に貢献します。</p>
                        <br />
                        {{-- <a class="btn btn-yellow btn-round">Read more</a> --}}
                    </div>
                    <!--end item-->

                    <div class="col-md-4 bmargin"> <img src="http://placehold.it/400x250" alt=""
                            class="img-responsive" /> <br />
                        <h5 class="uppercase less-mar1">EC事業</h5>
                        <div class="divider-line solid yellow margin"></div>
                        <p>EC/ECモールの構築やECモールの運営で、人々に必要な商品を届けします。</p>
                        <br />
                        {{-- <a class="btn btn-yellow btn-round">Read more</a> --}}
                    </div>
                    <!--end item-->

                </div>
            </div>
        </section>
        <!--end section-->
        <div class="clearfix"></div>

        <section class="parallax-section19">
            <div class="section-overlay bg-opacity-9">
                <div class="container sec-tpadding-2 sec-bpadding-2">
                    <div class="row">
                        <div class="col-sm-12 text-left nopadding">
                            <h4 class="section-title uppercase text-white">開発実績</h4>
                            <div class="title-line-8 yellow left"></div>
                            <p>企業様向けにカスタマイズ可能な様々なソフトウェアシステムを用意しております。<br />
                                システム導入については、気軽にお問い合わせください。</p>
                            <br />
                        </div>
                        <div class="clearfix"></div>

                        <div class="demo-full-width">
                            <div id="grid-container" class="cbp">
                                <div class="cbp-item identity logos"> <a href="http://placehold.it/1000x800"
                                        class="cbp-caption cbp-lightbox"
                                        data-title="Suspendisse Imperdiet<br>by Codelayers">
                                        <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/1000x800"
                                                alt=""> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignLeft">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">Suspendisse Imperdiet </div>
                                                    <div class="cbp-l-caption-desc">by Codelayers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> </div>
                                <div class="cbp-item web-design"> <a href="http://placehold.it/1000x800"
                                        class="cbp-caption cbp-lightbox"
                                        data-title="Magna Tempus Urna<br>by Codelayers">
                                        <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/1000x800"
                                                alt=""> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignLeft">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">Magna Tempus Urna</div>
                                                    <div class="cbp-l-caption-desc">by Codelayers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> </div>
                                <div class="cbp-item motion identity"> <a href="http://placehold.it/1000x800"
                                        class="cbp-caption cbp-lightbox"
                                        data-title="World Clock Widget<br>by Codelayers">
                                        <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/1000x800"
                                                alt=""> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignLeft">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">Maecenas Sed </div>
                                                    <div class="cbp-l-caption-desc">by Codelayers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> </div>
                                <div class="cbp-item identity graphic"> <a href="http://placehold.it/1000x800"
                                        class="cbp-caption cbp-lightbox"
                                        data-title="Quisque Ornare <br>by Codelayers">
                                        <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/1000x800"
                                                alt=""> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignLeft">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">Quisque Ornare </div>
                                                    <div class="cbp-l-caption-desc">by Codelayers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> </div>
                                <div class="cbp-item motion logos"> <a href="http://placehold.it/1000x800"
                                        class="cbp-caption cbp-lightbox"
                                        data-title="Skateshop Website<br>by Codelayers">
                                        <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/1000x800"
                                                alt=""> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignLeft">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">Hendrerit Condimentum</div>
                                                    <div class="cbp-l-caption-desc">by Codelayers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> </div>
                                <div class="cbp-item web-design"> <a href="http://placehold.it/1000x800"
                                        class="cbp-caption cbp-lightbox"
                                        data-title="Donec Dapibus Placerat <br>by Codelayers">
                                        <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/1000x800"
                                                alt=""> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignLeft">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">Donec Dapibus Placerat </div>
                                                    <div class="cbp-l-caption-desc">by Codelayers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> </div>
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
                    <div class="col-md-4 col-sm-6 align-left clearfix">
                        <div class="item-holder bmargin">
                            <h4 class="uppercase">選ばれる理由</h4>
                            <div class="title-line-8 yellow left"></div>
                            <br />
                            <br />
                            <div class="clearfix"></div>
                            <ul class="tabs10">
                                <li><a href="#example-10-tab-1" target="_self">Design </a></li>
                                <li><a href="#example-10-tab-2" target="_self">Develop</a></li>
                                <li><a class="last" href="#example-10-tab-3" target="_self">Support</a></li>
                            </ul>
                            <div class="tabs-content10">
                                <div id="example-10-tab-1" class="tabs-panel10">
                                    <p><img src="http://placehold.it/80x80" alt=""
                                            class="img-align-left" />Lorem
                                        ipsum dolor sit amet sit Praesent justo consectetuer adipiscing elit.
                                        Suspendisse et
                                        justo.</p>
                                    <br />
                                    <p>Lorem ipsum dolor sit amet sit et justo consectetuer adipiscing elit. Suspendisse
                                        et
                                        amet justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras
                                        tellus. In pulvinar</p>
                                </div>
                                <!-- end tab 1 -->

                                <div id="example-10-tab-2" class="tabs-panel10">
                                    <p>Lorem ipsum dolor sit amet sit Praesent justo consectetuer adipiscing elit.
                                        Suspendisse et justo.</p>
                                    <br />
                                    <p>Lorem ipsum dolor sit amet sit et justo consectetuer adipiscing elit. Suspendisse
                                        et
                                        amet justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras
                                        tellus. In pulvinar lectus a est Curabitur Suspendisse et amet.</p>
                                </div>
                                <!-- end tab 2 -->

                                <div id="example-10-tab-3" class="tabs-panel10"> <strong>Lorem ipsum dolor sit amet,
                                        consectetuer adipiscing elit ?</strong><br />
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.
                                        Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In
                                        pulvinar lectus a est Curabitur.</p>
                                    <br />
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.
                                    </p>
                                </div>
                                <!-- end tab 3 -->

                            </div>
                            <!-- end all tabs -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 align-left clearfix">
                        <div class="item-holder bmargin">
                            <h4 class="uppercase">会社ビジョン</h4>
                            <div class="title-line-8 yellow left"></div>
                            <br />
                            <br />
                            <div class="feature-box29">
                                <div class="image-holder">
                                    <img src="http://placehold.it/400x200" alt="" class="img-responsive" />
                                </div>
                                <div class="clearfix"></div>
                                <br />
                                <a href="#">
                                    <h5>私たちのビジョン</h5>
                                </a>
                                <p>ソフトウェア開発を通して、中小企業のDX化推進支援と、人々の生活に必要な便利なツールをご提供します。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 align-left last">
                        <div class="item-holder bmargin">
                            <h4 class="uppercase">サービス内容</h4>
                            <div class="title-line-8 yellow left"></div>
                            <br />
                            <br />
                            <div class="accordion_holder">
                                <div class="accordion_example1">

                                    <!-- Section 1 -->
                                    <div class="accordion_in two yellow acc_active">
                                        <div class="acc_head">Creative Design</div>
                                        <div class="acc_content"> Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit.
                                            Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare
                                            hendrerit
                                            augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. </div>
                                    </div>

                                    <!-- Section 2 -->
                                    <div class="accordion_in two yellow">
                                        <div class="acc_head">Graphic Design</div>
                                        <div class="acc_content"> Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit.
                                            Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare
                                            hendrerit
                                            augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras
                                            laoreet
                                            ligula. Etiam sit amet dolor. </div>
                                    </div>

                                    <!-- Section 3 -->
                                    <div class="accordion_in two yellow">
                                        <div class="acc_head">Photography</div>
                                        <div class="acc_content"> Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit.
                                            Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare
                                            hendrerit
                                            augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras
                                            laoreet
                                            ligula. Etiam sit amet dolor. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion end -->
                    </div>
                </div>
            </div>
        </section>
        <!--end section-->
        <div class="clearfix"></div>

        <section class="parallax-section20">
            <div class="section-overlay yellow">
                <div class="container sec-tpadding-2 sec-bpadding-2">
                    <div class="row">
                        <div class="col-sm-12 text-left nopadding">
                            <h4 class="section-title uppercase text-white">お客様の声</h4>
                            <div class="title-line-8 yellow left"></div>
                            <p class="text-white">当社のサービスをご利用していただいた、お客様からの声を掲載していただきました。</p>
                            <br />
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6">
                            <div class="feature-box30 active bmargin">
                                <div class="iconbox-large left">
                                    <div class="img-holder">
                                        <div class="img-inner overflow-hidden"> <img src="http://placehold.it/120x120"
                                                alt="" class="img-responsive" /> </div>
                                    </div>
                                </div>
                                <div class="text-box-right">
                                    <div class="text-box">
                                        <p>顧客管理システムをご導入することで、社内業務が飛躍的に向上し、作業時間の節約につながりました。</p>
                                        <h6 class="less-mar1">人材紹介A社</h6>
                                        <span class="text-yellow">管理部</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="col-md-6">
                            <div class="feature-box30 bmargin">
                                <div class="iconbox-large left">
                                    <div class="img-holder">
                                        <div class="img-inner overflow-hidden"> <img src="http://placehold.it/120x120"
                                                alt="" class="img-responsive" /> </div>
                                    </div>
                                </div>
                                <div class="text-box-right">
                                    <div class="text-box">
                                        <p>オンライン教室システムをご導入することで、講師たちの授業のスケジュール管理など、スムーズにできるうようになりました。</p>
                                        <h6 class="less-mar1">学習塾B教室</h6>
                                        <span class="text-yellow">管理部</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end item-->

                    </div>
                </div>
            </div>
        </section>
        <!--end section-->
        <div class="clearfix"></div>

        <section class="sec-tpadding-2 sec-bpadding less-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-left nopadding">
                        <h4 class="section-title uppercase">新着情報</h4>
                        <div class="title-line-8 yellow left"></div>
                        <p>弊社のサービスや活動に関する各種ニュースを掲載させております。</p>
                        <br />
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                        <div class="blog-holder6 bmargin">
                            <div class="col-md-6 col-sm-6 nopadding">
                                <div class="text-box-inner">
                                    <h5 class="uppercase less-mar1"><a href="#">interior design</a></h5>
                                    <div class="divider-line solid margin yellow"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.
                                        Praesent mattis.</p>
                                    <br />
                                    <a class="read-more yellow" href="#"><i
                                            class="fa fa-angle-double-right"></i>
                                        Read more</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 nopadding">
                                <div class="image-holder">
                                    <div class="post-date-box"> 25 <span>May, 2020</span> </div>
                                    <img src="http://placehold.it/1000x1100" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end item-->

                    <div class="col-md-6">
                        <div class="blog-holder6 bmargin">
                            <div class="col-md-6 col-sm-6 nopadding">
                                <div class="text-box-inner">
                                    <h5 class="uppercase less-mar1"><a href="#">interior design</a></h5>
                                    <div class="divider-line solid margin yellow"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.
                                        Praesent mattis.</p>
                                    <br />
                                    <a class="read-more yellow" href="#"><i
                                            class="fa fa-angle-double-right"></i>
                                        Read more</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 nopadding">
                                <div class="image-holder">
                                    <div class="post-date-box"> 25 <span>May, 2020</span> </div>
                                    <img src="http://placehold.it/1000x1100" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end item-->

                </div>
            </div>
        </section>
        <!--end section -->
        <div class="clearfix"></div>

        <section class="section-fulldark sec-padding">
            <div class="container ">
                <div class="row">
                    <div class="col-md-3 clearfix">
                        <div class="footer-logo"><img src="{{ asset('images/asia-hd_logo.png') }}" alt="" />
                        </div>
                        <ul class="address-info">
                            <li>Address: 〒171-0014 <br>
                                東京都豊島区池袋4-27-5 和田ビル502号
                            </li>
                            <li><i class="fa fa-phone"></i> Phone: 03-3981-5090 （代表）</li>
                            <li><i class="fa fa-fax"></i> Fax: 03-3981-5092</li>
                            <li class="last"><i class="fa fa-envelope"></i> Email: info@asia-hd.com</li>
                        </ul>
                    </div>
                    <!--end item-->

                    <div class="col-md-2 clearfix">

                    </div>

                    <div class="col-md-4 clearfix">
                        <h4 class="uppercase footer-title less-mar3">会社情報</h4>
                        <div class="clearfix"></div>
                        <div class="footer-title-bottomstrip"></div>
                        <ul class="usefull-links yellow">
                            <li><a href="#"><i class="fa fa-angle-right"></i>HOME</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>会社概要</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>開発実績</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>サービス案内</a></li>
                        </ul>
                    </div>
                    <!--end item-->

                    <div class="col-md-3 clearfix">
                        <h4 class="uppercase footer-title less-mar3">その他</h4>
                        <div class="clearfix"></div>
                        <div class="footer-title-bottomstrip"></div>
                        <ul class="usefull-links yellow">
                            <li><a href="#"><i class="fa fa-angle-right"></i>新着情報</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>お問合せ</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>プライバシーポリシー</a></li>
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
    <script src="{{ asset('js/masterslider/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/masterslider/masterslider.min.js') }}"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";
            var slider = new MasterSlider();
            // adds Arrows navigation control to the slider.
            slider.control('arrows');
            slider.control('bullets');

            slider.setup('masterslider', {
                width: 1600, // slider standard width
                height: 665, // slider standard height
                space: 0,
                speed: 45,
                layout: 'fullwidth',
                loop: true,
                preload: 0,
                autoplay: true,
                view: "parallaxMask"
            });

        })(jQuery);
    </script>
    <script src="{{ asset('js/mainmenu/customeUI.js') }}"></script>
    <script src="{{ asset('js/mainmenu/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/cubeportfolio/jquery.cubeportfolio.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/cubeportfolio/main.js') }}"></script>
    <script src="{{ asset('js/animations/js/appear.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/owl-carousel/custom.js') }}"></script>
    <script src="{{ asset('js/tabs/assets/js/responsive-tabs.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/tabs/smk-accordion.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tabs/custom.js') }}"></script>
    <script src="{{ asset('js/scrolltotop/totop.js') }}"></script>

    <script src="{{ asset('js/scripts/functions.js') }}" type="text/javascript"></script>
</body>

</html>
