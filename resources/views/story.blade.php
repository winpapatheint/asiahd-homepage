{{-- <!doctype html>
<html lang="en">
<head>
<title>Asia Human Development</title>
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
<link rel="stylesheet" media="screen" href="js/bootstrap/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="js/mainmenu/menu.css" type="text/css" />
<link rel="stylesheet" href="css/default.css" type="text/css" />
<link rel="stylesheet" href="css/layouts.css" type="text/css" />
<link rel="stylesheet" href="css/shortcodes.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="css/et-line-font/et-line-font.css">
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="js/jFlickrFeed/style.css" />
</head>

<body>
<div class="site_wrapper">
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
    </div> --}}
    <!--end menu-->
<x-guest-layout>
    <section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase">私たちのストーリー</h4>
                <h5 class="text-white uppercase">Our Story</h5>
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
                        <h3>Our Story</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="pagenation_links">Home <i>/</i> Our Story</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <!--start section-->
    <section class="sec-padding">
        {{-- list section --}}
        @foreach ($sectionStories as $sectionKey => $sectionStory)
        @if ($sectionStory->type == 'list')
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-left nopadding">
                    <div class="divider-line solid margin yellow"></div>
                    <h4 class="section-title uppercase">{{ $sectionStory->section }}</h4>
                    <div class="title-line-8 yellow left"></div>
                </div>

                @php
                    $listStories = $stories->where('section_story_id', $sectionStory->id);
                    $counter = 0;
                @endphp
                @foreach ($listStories as $key => $story)
                @if ($counter / 2 == 0)
                <div class="col-md-6 bmargin">
                    <h5 class="uppercase less-mar1 nopadding">{{ $story->title }}</h5>
                    <div class="divider-line solid margin yellow"></div>

                    <p>
                        {{ $story->body }}
                    </p>
                </div>

                <div class="col-md-6">
                    <div class="blog-holder6 bmargin">
                        <img src="{{ asset('images/' . $story->image) }}" alt="" class="img-responsive" />
                    </div>
                </div>
                @else
                <div class="col-md-6">
                    <div class="blog-holder6 bmargin">
                        <img src="{{ asset('images/' . $story->image) }}" alt="" class="img-responsive" />
                    </div>
                </div>

                <div class="col-md-6 bmargin">
                    <h5 class="uppercase less-mar1 nopadding">{{ $story->title }}</h5>
                    <div class="divider-line solid margin yellow"></div>

                    <p>
                        {{ $story->body }}
                    </p>
                </div>
                @endif
                <div class="clearfix"></div>
                <br /><br />
                <!--end item-->
                @php
                    $counter++;
                @endphp
                @endforeach
            </div>
        </div>
        {{-- list section end --}}
        @else
        {{-- grid section --}}
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-left nopadding">
                    <div class="divider-line solid margin yellow"></div>
                    <h4 class="section-title uppercase">{{ $sectionStory->section }}</h4>
                    <div class="title-line-8 yellow left"></div>
                </div>
                @php
                    $gridStories = $stories->where('section_story_id', $sectionStory->id);
                    $counter = 0;
                @endphp
                @foreach ($gridStories as $story)
                <div class="col-md-4 col-sm-6">
                    <div class="team-holder5 text-center bmargin">
                        <div class="image-holder">
                            <div class="hover-box"><br>
                                <p class="text-white"> {{ $story->body }}
                                </p>
                            </div>
                            <img src="{{ asset('images/' . $story->image) }}" alt="" class="img-responsive" />
                        </div>
                        <div class="clearfix"></div>
                        <br />
                        <h5 class="less-mar1">{{ $story->title }}</h5>
                    </div>
                </div>
                <!--end item-->
                @endforeach
            </div>
        </div>
        {{-- grid section end --}}
        @endif
        @endforeach
    </section>
    <!--end section-->
</x-guest-layout>
    {{-- <section class="section-fulldark sec-padding">
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
</html> --}}
