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
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://www.google.com/fonts#UsePlace:use/Collection:Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://www.google.com/fonts#UsePlace:use/Collection:Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- Stylesheets -->
<link rel="stylesheet" media="screen" href="{{ asset('js/bootstrap/bootstrap.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('js/mainmenu/menu.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/default.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/layouts.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/shortcodes.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" media="screen" href="{{ asset('css/responsive-leyouts.css') }}" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/Simple-Line-Icons-Webfont/simple-line-icons.css') }}" media="screen" />
<link rel="stylesheet" href="{{ asset('css/et-line-font/et-line-font.css') }}">
<link href="{{ asset('js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('js/jFlickrFeed/style.css') }}" />
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
                    <a href="{{ url('/') }}" class="navbar-brand" style="max-width: 80%;padding-left: 5%;"><img src="{{ asset('images/asia-hd_logo.png') }}"
                            alt="" /></a>
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid"
                        class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span
                            class="icon-bar"></span></button>
                </div>
                <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
                    <ul class="nav yellow navbar-nav">
                        <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
                            <ul class="nav yellow navbar-nav">
                            <li> <a href="{{ url('/admin/news') }}" class="dropdown-toggle 
                                    {{request()->is('admin/news') ||
                                    request()->is('admin/news/add') ||
                                    request()->is('admin/news/edit/*') 
                                    ? 'active' : ''}}">
                                    新着情報</a>
                                </li>
                                <li> <a href="{{ url('/admin/advertise') }}" class="dropdown-toggle
                                    {{request()->is('admin/advertise') ||
                                    request()->is('admin/advertise-page-add') ||
                                    request()->is('admin/advertise-section-add') ||
                                    request()->is('admin/advertise-story-add') ||
                                    request()->is('admin/advertise-story-edit/*')
                                    ? 'active' : ''}}">
                                    広告管理</a>
                                </li>
                                <li> <a href="{{ url('/admin/project') }}" class="dropdown-toggle 
                                    {{request()->is('admin/project') ||
                                    request()->is('admin/project/add') ||
                                    request()->is('admin/project/edit/*') 
                                    ? 'active' : ''}}">
                                    製品一覧</a>
                                </li>
                              
                             
                                <li> <a href="{{ url('/admin/change-password') }}" class="dropdown-toggle
                                    {{request()->is('admin/change-password') ? 'active' : ''}}">
                                    パスワード修正</a>
                                </li>
                                <li> <a href="#" class="logout-link"
                                    data-toggle="modal" data-target="#confirmLogoutModal" >
                                    ログアウト</a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end menu-->
    <div class="clearfix"></div>
        {{ $slot }}
    </div>
    <!-- Confirm Logout Modal -->
    <div class="modal fade" id="confirmLogoutModal" tabindex="-1" role="dialog" aria-labelledby="confirmLogoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmLogoutModalLabel" style="text-align: center; width: 100%;">ログアウト</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 15px; top: 15px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align: center">
                    ログアウトしますか？
                </div>
                <div class="modal-footer">
                    <form id="logoutForm" method="get" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-success">はい</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">いいえ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
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
                        <li><a href="{{ url('/project') }}"><i class="fa fa-angle-right"></i>製品一覧</a></li>
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

    <section class="section-copyrights" style="padding: 10px 0 10px 0;>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span style="color: white;">Copyright Asia Human Development, Inc. all rights reserved</span>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <a href="#" class="scrollup" style="background-color: #559119"></a><!-- end scroll to top of the page-->
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
