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
<link rel="shortcut icon" href="{{ asset('images/asiahd_slogo.png') }}">

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
                        <li> <a href="{{ url('/news') }}" class="dropdown-toggle">新着情報</a></li>
                        <li> <a href="{{ url('/recruit') }}" class="dropdown-toggle">採用情報</a></li>
                        <li> <a href="{{ url('/contact') }}" class="dropdown-toggle active">お問合せ</a></li>
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
                    <h4 class="title text-white uppercase">お問合せ</h4>
                    <h5 class="text-white uppercase">Contact Us</h5>
                </div>
                <div class="overlay bg-opacity-5"></div>
                <img src="{{ asset('images/Contact.jpg') }}" alt="" class="img-responsive" />
            </div>
        </section>
        <!-- end header inner -->
        <div class="clearfix"></div>

        <section>
            <div class="pagenation-holder">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Contact</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="pagenation_links">Home <i>/</i> Contact</div>
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
                    <div class="col-md-8">
                        <div class="smart-forms bmargin">
                            <h3 class="raleway">お問合せ</h3>
                            <p>内容によっては、お返事にお時間をいただく場合やお返事を差し上げられない場合がございます。<br>
                                あらかじめご了承ください。</p>
                            <br />
                            <br />
                            <form method="post" action="php/smartprocess.php" id="smart-form">
                                <div>
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="sendersubject" id="sendersubject"
                                                class="gui-input" placeholder="件名">
                                            <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span> </label>
                                    </div>

                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="sendername" id="sendername"
                                                class="gui-input" placeholder="名前">
                                            <span class="field-icon"><i class="fa fa-user"></i></span> </label>
                                    </div>

                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="email" name="emailaddress" id="emailaddress"
                                                class="gui-input" placeholder="メール">
                                            <span class="field-icon"><i class="fa fa-envelope"></i></span> </label>
                                    </div>

                                    <div class="section colm colm6">
                                        <label class="field prepend-icon">
                                            <input type="tel" name="telephone" id="telephone" class="gui-input" placeholder="TEL">
                                            <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                                        </label>
                                    </div>

                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="内容"></textarea>
                                            <span class="field-icon">
                                                <i class="fa fa-comments"></i>
                                            </span>
                                            {{-- <span
                                                class="input-hint"> <strong>Hint:</strong> Please enter between 80 -
                                                300 characters.
                                            </span> --}}
                                        </label>
                                    </div>

                                    <!--<div class="section">
                            <div class="smart-widget sm-left sml-120">
                                <label class="field">
                                    <input type="text" name="captcha" id="captcha" class="gui-input sfcode" maxlength="6" placeholder="Enter CAPTCHA">
                                </label>
                                <label class="button captcode">
                                    <img src="php/captcha/captcha.php?<?php echo time(); ?>" id="captchax" alt="captcha">
                                    <span class="refresh-captcha"><i class="fa fa-refresh"></i></span>
                                </label>
                            </div>
                        </div>-->

                                    <div class="result"></div>
                                </div>
                                <!-- end .form-body section -->

                                <div class="form-footer">
                                    <button type="submit" data-btntext-sending="Sending..."
                                        class="button btn-primary yellow">送信</button>
                                    <button type="reset" class="button"> キャンセル </button>
                                </div>
                            </form>
                        </div>
                        <!-- end .smart-forms section -->

                    </div>
                    <div class="col-md-4 bmargin">
                        <h3 class="raleway">住所</h3>

                        <h6><strong>アジア人材開発株式会社</strong></h6>
                        〒171-0014 <br>
                        東京都豊島区池袋4-27-5 和田ビル502号 <br />
                        TEL: 03-3981-5090<br />
                        FAX: 03-3981-5092<br />
                        E-mail: <a href="mailto:email@example.com">info@asia-hd.com</a><br />

                        <div class="clearfix"></div><br>

                        <div id="map" class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619.2611280535918!2d139.7094805379498!3d35.73796627717492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601892a013f7dbb3%3A0x951f540f2d58a6ad!2z44CSMTcxLTAwMTQgVG9reW8sIFRvc2hpbWEgQ2l0eSwgSWtlYnVrdXJvLCA0LWNoxY1tZeKIkjI34oiSNSDlkoznlLDjg5Pjg6sgNTAy!5e0!3m2!1sen!2sjp!4v1719909993290!5m2!1sen!2sjp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

<!-- ============ JS FILES ============ -->
<script type="text/javascript" src="{{ asset('js/universal/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jFlickrFeed/jflickrfeed.min.js') }}"></script>
<script src="{{ asset('js/mainmenu/customeUI.js') }}"></script>
<script src="{{ asset('js/scrolltotop/totop.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/jquery.form.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/additional-methods.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smart-forms/smart-form.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/gmaps/jquery.gmap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/gmaps/examples.js') }}"></script>
<script src="{{ asset('js/mainmenu/jquery.sticky.js') }}"></script>

<script src="{{ asset('js/scripts/functions.js') }}" type="text/javascript"></script>
</body>
</html>
