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
{{-- <link rel="stylesheet" media="screen" href="{{ asset('js/bootstrap/bootstrap.min.css') }}" type="text/css" />
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
<link rel="stylesheet" type="text/css" href="{{ asset('js/smart-forms/smart-forms.css') }}"> --}}

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
                            <li> <a href="{{ url('/') }}" class="dropdown-toggle {{request()->is('/') ? 'active' : ''}}">
                                Home</a>
                            </li>
                            <li> <a href="{{ url('/about') }}" class="dropdown-toggle {{request()->is('about') ? 'active' : ''}}">
                                会社概要</a>
                            </li>
                            <li> <a href="{{ url('/project') }}" class="dropdown-toggle 
                                {{request()->is('project') || 
                                request()->is('project/*') 
                                ? 'active' : ''}}">
                                開発実績</a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ url('/service1') }}" class="dropdown-toggle 
                                {{request()->is('service1') || 
                                request()->is('service2') || 
                                request()->is('service3') || 
                                request()->is('service4') ? 'active' : ''}}">
                                    サービス案内</a>
                                <ul class="dropdown-menu five" role="menu">
                                    <li><a href="{{ url('/service1') }}">SES/請負開発</a></li>
                                    <li><a href="{{ url('/service2') }}">IT導入支援</a></li>
                                    <li><a href="{{ url('/service3') }}">日本留学ナビ運営</a></li>
                                    <li><a href="{{ url('/service4') }}">EC事業</a></li>
                                </ul>
                            </li>
                            <li> <a href="{{ url('/news') }}" class="dropdown-toggle {{request()->is('news') ? 'active' : ''}}">
                                新着情報</a>
                            </li>
                            <li> <a href="{{ url('/recruit') }}" class="dropdown-toggle {{request()->is('recruit') ? 'active' : ''}}">
                                採用情報</a>
                            </li>
                            <li> <a href="{{ url('/contact') }}" class="dropdown-toggle {{request()->is('contact') ? 'active' : ''}}">
                                お問合せ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

    {{$slot}}
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
{{-- <script type="text/javascript" src="{{ asset('js/universal/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jFlickrFeed/jflickrfeed.min.js') }}"></script>
<script src="{{ asset('js/masterslider/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/masterslider/masterslider.min.js') }}"></script>
<script type="text/javascript">
    (function($) {
    "use strict";
        var slider = new MasterSlider();
        slider.control('arrows');
        slider.control('bullets');

        slider.setup('masterslider' , {
            width:1600,
            height:665,
            space:0,
            speed:45,
            layout:'fullwidth',
            loop:true,
            preload:0,
            autoplay:true,
            view:"parallaxMask"
        });

    })(jQuery);
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('js/cubeportfolio/main-two-col.js') }}"></script>
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
<script src="{{ asset('js/scripts/functions.js') }}" type="text/javascript"></script> --}}

{{-- <script type="text/javascript" src="{{ asset('js/universal/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jFlickrFeed/jflickrfeed.min.js') }}"></script>
<script src="{{ asset('js/mainmenu/customeUI.js') }}"></script>
<script src="{{ asset('js/mainmenu/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/scrolltotop/totop.js') }}"></script>
<script src="{{ asset('js/scripts/functions.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/jquery.form.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/additional-methods.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/smart-form.js') }}"></script>
<script src="{{ asset('js/masterslider/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/masterslider/masterslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cubeportfolio/main-two-col.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cubeportfolio/jquery.cubeportfolio.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cubeportfolio/main.js') }}"></script>
<script src="{{ asset('js/animations/js/appear.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('js/owl-carousel/custom.js') }}"></script>
<script src="{{ asset('js/tabs/assets/js/responsive-tabs.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/tabs/smk-accordion.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tabs/custom.js') }}"></script> --}}

{{-- <script type="text/javascript" src="{{ asset('js/universal/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jFlickrFeed/jflickrfeed.min.js') }}"></script>
<script src="{{ asset('js/masterslider/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/masterslider/masterslider.min.js') }}"></script>
<script type="text/javascript">
    (function($) {
    "use strict";
        var slider = new MasterSlider();
        slider.control('arrows');
        slider.control('bullets');

        slider.setup('masterslider' , {
            width:1600,
            height:665,
            space:0,
            speed:45,
            layout:'fullwidth',
            loop:true,
            preload:0,
            autoplay:true,
            view:"parallaxMask"
        });

    })(jQuery);
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('js/cubeportfolio/jquery.cubeportfolio.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cubeportfolio/main-two-col.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cubeportfolio/main.js') }}"></script>
<script src="{{ asset('js/mainmenu/customeUI.js') }}"></script>
<script src="{{ asset('js/mainmenu/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/animations/js/appear.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('js/owl-carousel/custom.js') }}"></script>
<script src="{{ asset('js/tabs/assets/js/responsive-tabs.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/tabs/smk-accordion.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tabs/custom.js') }}"></script>
<script src="{{ asset('js/scrolltotop/totop.js') }}"></script>
<script src="{{ asset('js/scripts/functions.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/jquery.form.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/additional-methods.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/smart-form.js') }}"></script> --}}

<!-- jQuery Library -->
{{-- <script type="text/javascript" src="{{ asset('js/universal/jquery.js') }}"></script> --}}

<!-- Bootstrap -->
{{-- <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script> --}}

<!-- jFlickrFeed -->
{{-- <script src="{{ asset('js/jFlickrFeed/jflickrfeed.min.js') }}"></script> --}}

<!-- Main Menu -->
{{-- <script src="{{ asset('js/mainmenu/customeUI.js') }}"></script>
<script src="{{ asset('js/mainmenu/jquery.sticky.js') }}"></script> --}}

<!-- Scroll to Top -->
{{-- <script src="{{ asset('js/scrolltotop/totop.js') }}"></script> --}}

<!-- General Functions -->
{{-- <script src="{{ asset('js/scripts/functions.js') }}" type="text/javascript"></script> --}}

<!-- Smart Forms -->
{{-- <script type="text/javascript" src="{{ asset('js/smart-forms/jquery.form.min.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('js/smart-forms/jquery.validate.min.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('js/smart-forms/additional-methods.min.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('js/smart-forms/smart-form.js') }}"></script> --}}

<!-- Master Slider -->
{{-- <script src="{{ asset('js/masterslider/jquery.easing.min.js') }}"></script> --}}
{{-- <script src="{{ asset('js/masterslider/masterslider.min.js') }}"></script> --}}

<!-- Cube Portfolio -->
{{-- <script type="text/javascript" src="{{ asset('js/cubeportfolio/jquery.cubeportfolio.min.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('js/cubeportfolio/main-two-col.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('js/cubeportfolio/main3.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('js/cubeportfolio/main2.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('js/cubeportfolio/main.js') }}"></script> --}}

<!-- Animations -->
{{-- <script src="{{ asset('js/animations/js/appear.min.js') }}" type="text/javascript"></script> --}}

<!-- Owl Carousel -->
{{-- <script src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script> --}}
{{-- <script src="{{ asset('js/owl-carousel/custom.js') }}"></script> --}}

<!-- Tabs -->
{{-- <script src="{{ asset('js/tabs/assets/js/responsive-tabs.min.js') }}" type="text/javascript"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('js/tabs/smk-accordion.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('js/tabs/custom.js') }}"></script> --}}
<!-- jQuery Library -->
<script type="text/javascript" src="{{ asset('js/universal/jquery.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>

<!-- jFlickrFeed -->
<script src="{{ asset('js/jFlickrFeed/jflickrfeed.min.js') }}"></script>

<!-- Main Menu -->
<script src="{{ asset('js/mainmenu/customeUI.js') }}"></script>
<script src="{{ asset('js/mainmenu/jquery.sticky.js') }}"></script>

<!-- Scroll to Top -->
<script src="{{ asset('js/scrolltotop/totop.js') }}"></script>

<!-- General Functions -->
<script src="{{ asset('js/scripts/functions.js') }}" type="text/javascript"></script>

<!-- Smart Forms -->
<script type="text/javascript" src="{{ asset('js/smart-forms/jquery.form.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/additional-methods.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/smart-form.js') }}"></script>

<!-- Master Slider -->
<script src="{{ asset('js/masterslider/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/masterslider/masterslider.min.js') }}"></script>
<script type="text/javascript">
    (function($) {
        "use strict";
        $(document).ready(function() {
            var slider = new MasterSlider();
            slider.control('arrows');
            slider.control('bullets');

            slider.setup('masterslider', {
                width: 1600,
                height: 665,
                space: 0,
                speed: 45,
                layout: 'fullwidth',
                loop: true,
                preload: 0,
                autoplay: true,
                view: "parallaxMask"
            });
        });
    })(jQuery);
</script>

<!-- Cube Portfolio -->
<script type="text/javascript" src="{{ asset('js/cubeportfolio/jquery.cubeportfolio.min.js') }}"></script>
{{-- <script type="text/javascript">
    (function($) {
        "use strict";
        $(document).ready(function() {
            var $cubeportfolio = $('.cbp');
            if ($cubeportfolio.data('cubeportfolio')) {
                $cubeportfolio.cubeportfolio('destroy');
            }
            $cubeportfolio.cubeportfolio({
                filters: '#js-filters-cube',
                layoutMode: 'grid',
                mediaQueries: [{
                    width: 1500,
                    cols: 5
                }, {
                    width: 1100,
                    cols: 4
                }, {
                    width: 800,
                    cols: 3
                }, {
                    width: 480,
                    cols: 2
                }, {
                    width: 320,
                    cols: 1
                }],
                defaultFilter: '*',
                animationType: 'quicksand',
                gapHorizontal: 10,
                gapVertical: 10,
                gridAdjustment: 'responsive',
                caption: 'zoom',
                displayType: 'fadeIn',
                displayTypeSpeed: 100
            });
        });
    })(jQuery);
</script> --}}
{{-- <script type="text/javascript" src="{{ asset('js/cubeportfolio/main-two-col.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('js/cubeportfolio/main3.js') }}"></script> --}}
<script type="text/javascript" src="{{ asset('js/cubeportfolio/main2.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cubeportfolio/main.js') }}"></script>

<!-- Animations -->
<script src="{{ asset('js/animations/js/appear.min.js') }}" type="text/javascript"></script>

<!-- Owl Carousel -->
<script src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('js/owl-carousel/custom.js') }}"></script>

<!-- Tabs -->
<script src="{{ asset('js/tabs/assets/js/responsive-tabs.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/tabs/smk-accordion.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tabs/custom.js') }}"></script>

</body>
</html>
