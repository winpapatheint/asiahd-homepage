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

    {{$slot}}

    <section class="section-fulldark sec-padding">
        <div class="container ">
        <div class="row">
            <div class="col-md-3 clearfix">
            <div class="footer-logo"><img src="{{ asset('images/asia-hd_logo.png') }}" alt=""/></div>
            <ul class="address-info">
                <li>Address: No.28 - 63739 street lorem ipsum City, Country</li>
                <li><i class="fa fa-home"></i> Phone: + 1 (234) 567 8901</li>
                <li><i class="fa fa-phone"></i> Phone: + 1 (234) 567 8901</li>
                <li><i class="fa fa-fax"></i> Fax: + 1 (234) 567 8901</li>
                <li class="last"><i class="fa fa-envelope"></i> Email: support@yoursite.com </li>
            </ul>
            </div>
            <!--end item-->

            <div class="col-md-2 clearfix">

            </div>
            <!--end item-->

            <div class="col-md-4 clearfix">
            <h4 class="uppercase footer-title less-mar3">Top Services</h4>
            <div class="clearfix"></div>
            <div class="footer-title-bottomstrip"></div>
            <ul class="usefull-links yellow">
                <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum ipsum</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                <li class="last"><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            </ul>
            </div>
            <!--end item-->

            <div class="col-md-3 clearfix">
            <h4 class="uppercase footer-title less-mar3">Flickr Feed</h4>
            <div class="clearfix"></div>
            <div class="footer-title-bottomstrip"></div>
            <ul id="basicuse" class="thumbs">
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
            <div class="col-md-12"> <span>Copyright © 2020 <a href="https://1.envato.market/hasta-html-by-codelayers">hasta</a> By <a href="https://1.envato.market/codelayers">Codelayers</a> | All rights reserved.</span></div>
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
{{-- <script>
    $('#basicuse').jflickrfeed({
    limit: 6,
    qstrings: {
    id: '133294431@N08'
    },
    itemTemplate:
    '<li>' +
    // '<a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
    '</li>'
    });
</script> --}}
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
<script src="{{ asset('js/scripts/functions.js') }}" type="text/javascript"></script>
</body>
</html>
