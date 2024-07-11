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

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('images/asiahd_slogo.png') }}">

<!-- this styles only adds some repairs on idevices  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google fonts - witch you want to use - (rest you can just remove) -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://www.google.com/fonts#UsePlace:use/Collection:Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://www.google.com/fonts#UsePlace:use/Collection:Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

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
<link rel="stylesheet" type="text/css" href="{{ asset('css/Simple-Line-Icons-Webfont/simple-line-icons.css') }}" media="screen" />
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
                    <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('images/asia-hd_logo.png') }}"
                            alt="" /></a>
                </div>
                <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
                    <ul class="nav yellow navbar-nav">
                        <li> <a href="{{ url('/') }}" class="dropdown-toggle">Home</a></li>
                        <li> <a href="{{ url('/about') }}" class="dropdown-toggle">会社概要</a></li>
                        <li> <a href="{{ url('/project') }}" class="dropdown-toggle">開発実績</a></li>
                        <li class="dropdown">
                            <a href="{{ url('/service1') }}" class="active">サービス案内</a>
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
                        <div class="pagenation_links">Home <i>/</i>Services</div>
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
                        <li><a href="{{ url('/service1') }}" class="active"><i class="fa fa-angle-right"></i> &nbsp;SES/請負開発 </a></li>
                        <li><a href="{{ url('/service2') }}"><i class="fa fa-angle-right"></i> &nbsp;IT導入支援 </a></li>
                        <li><a href="{{ url('/service3') }}"><i class="fa fa-angle-right"></i> &nbsp;日本留学ナビ運営 </a></li>
                        <li><a href="{{ url('/service4') }}"><i class="fa fa-angle-right"></i> &nbsp;EC事業</a></li>
                    </ul>
                </div>
                <!--end item-->

                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="col-md-12 bmargin"> <img src="{{ asset('images/ser01.jpg') }}" alt=""
                            class="img-responsive" /> <br />
                        <h5 class="uppercase less-mar1">SES/請負開発</h5>
                        <div class="divider-line solid margin yellow"></div>
                        <p>受託開発やパッケージの開発で成長した実践力のあるエンジニアを、ご提案させていただきます。</p>
                        <br />
                        <h5 class="text-yellow">開発スキル</h5>

                        <div class="skills">
                            <div class="col-left">開発言語：</div><div>JAVA、VB.Net、C#.NET、ASP.Net、PHP、C/C++、VB 等</div>
                            <div class="col-left">データベース：</div><div>Oracle、MS-SQL、DB2、MySQL、PostgreSQL</div>
                            <div class="col-left">OS：</div><div>Windows、Windows Server、UNIX、Linux、Solaris</div>
                            <div class="col-left">得意分野：</div><div>各種WEBシステム</div>
                        </div>
                    </div>
                    <!--end item-->
                </div>
            </div>
        </div>
    </section>
    <!--end section-->

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
