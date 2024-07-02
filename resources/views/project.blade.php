<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--<![endif]-->
<html lang="en">

<head>
    <title>Hasta - Responsive MultiPurpose HTML5 Template</title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

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
    <link rel="stylesheet" media="screen" href="js/bootstrap/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="js/mainmenu/menu.css" type="text/css" />
    <link rel="stylesheet" href="css/default.css" type="text/css" />
    <link rel="stylesheet" href="css/layouts.css" type="text/css" />
    <link rel="stylesheet" href="css/shortcodes.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="js/cubeportfolio/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
    <link rel="stylesheet" href="css/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="js/jFlickrFeed/style.css" />



    <!-- Remove the below comments to use your color option -->
    <!--<link rel="stylesheet" href="css/colors/lightblue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/colors/green.css" />-->
    <!--<link rel="stylesheet" href="css/colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/colors/red.css" />-->
    <!--<link rel="stylesheet" href="css/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/colors/bridge.css" />-->
    <!--<link rel="stylesheet" href="css/colors/yellow.css" />-->
    <!--<link rel="stylesheet" href="css/colors/violet.css" />-->
    <!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="css/colors/mossgreen.css" />-->


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
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('images/asia-hd_logo.png') }}" alt=""/></a> </div>
                    <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
                    <ul class="nav yellow navbar-nav">
                        <li> <a href="{{ url('/') }}" class="dropdown-toggle">Home</a></li>
                        <li class="dropdown"> <a href="{{ url('/about') }}" class="dropdown-toggle">会社概要</a>
                            <ul class="dropdown-menu five" role="menu">
                                <li> <a href="construction.html">代表者挨拶</a></li>
                            </ul>
                        </li>
                        <li> <a href="{{ url('/project') }}" class="dropdown-toggle active" >開発実績</a></li>
                        <li class="dropdown">
                            <a href="{{ url('/service') }}">サービス案内</a>
                            <ul class="dropdown-menu five" role="menu">
                                <li><a href="{{ url('/service1') }}">SES/請負開発</a></li>
                                <li><a href="{{ url('/service2') }}">IT導入支援</a></li>
                                <li><a href="{{ url('/service3') }}">日本留学ナビ運営</a></li>
                                <li><a href="{{ url('/service4') }}">ECモール運営</a></li>
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
                    <h4 class="title text-white uppercase">Projects</h4>
                    <h5 class="text-white uppercase">Get many More Projects</h5>
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
                            <h3>Projects</h3>
                        </div>

                        <div class="col-md-6 text-right">
                            <div class="pagenation_links"><a href="index.html">Home</a> <i>/</i> Projects
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
                    <div class="col-sm-12 text-left nopadding">
                        <h4 class="section-title uppercase">Our Projects</h4>
                        <div class="title-line-8 yellow left"></div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent
                            mattis commodo augue.<br />
                            Aliquam ornare hendrerit augue.</p>
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
                                    class="cbp-caption cbp-lightbox" data-title="Magna Tempus Urna<br>by Codelayers">
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
                                    class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Codelayers">
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
                                    class="cbp-caption cbp-lightbox" data-title="Quisque Ornare <br>by Codelayers">
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
                                    class="cbp-caption cbp-lightbox" data-title="Skateshop Website<br>by Codelayers">
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
        </section>
        <!--end section-->
        <div class="clearfix"></div>


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
    <script type="text/javascript" src="js/universal/jquery.js"></script>
    <script src="js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jFlickrFeed/jflickrfeed.min.js"></script>
    {{-- <script>
        $('#basicuse').jflickrfeed({
            limit: 6,
            qstrings: {
                id: '133294431@N08'
            },
            itemTemplate: '<li>' +
                '<a href="{{ image_b }}"><img src="{{ image_s }}" alt="{{ title }}" /></a>' +
                '</li>'
        });
    </script> --}}

    <script src="js/mainmenu/customeUI.js"></script>
    <script src="js/mainmenu/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
    <script type="text/javascript" src="js/cubeportfolio/main-two-col.js"></script>
    <script src="js/scrolltotop/totop.js"></script>

    <script src="js/scripts/functions.js" type="text/javascript"></script>
</body>

</html>
