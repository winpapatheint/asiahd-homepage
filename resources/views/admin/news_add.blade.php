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
                            <li> <a href="{{ url('/about') }}" class="dropdown-toggle active">会社概要</a></li>
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
                    <h4 class="title text-white uppercase">会社概要</h4>
                    <h5 class="text-white uppercase">About Us</h5>
                </div>
                <div class="overlay bg-opacity-5"></div>
                <img src="{{ asset('images/abo-us.jpg') }}" alt="" class="img-responsive" />
            </div>
        </section>
        <!-- end header inner -->
        <div class="clearfix"></div>

        <section>
            <div class="pagenation-holder">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>About Us</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="pagenation_links">Home <i>/</i> About Us</div>
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
                        <h4 class="section-title uppercase">ご挨拶</h4>
                        <div class="title-line-8 yellow left"></div>
                    </div>
                    <p>新技術がもたらす新しい道具や環境を私達はいつの間にか受け入れ、生活やビジネスにおいて欠かせないモノとしてしまう。更に便利や改善を求めアイデアや技術、資本が投入されていく・・・、世界中の人びとが瞬時に情報を共有する、「グローバル・コミュニケーション時代」を生みだしたインターネットの発達も、様々な業種業態の産業のスタイルを変化させました。自国におけるソフトウエア開発分野も同様に開発拠点を他国に移し生産効率やコスト、人的パワーなどを追求し様々な角度でそれを実現しています。
                        弊社は日本にあってソフトウエア開発という分野でグローバルの観点より技術のご提供で社会に貢献しております。グローバル・マーケティングに見る協業を創造し、我々の武器であるグローバル・コミュニケーション能力と技術を提供するシステム開発会社です。
                    </p>
                    <br />

                    <p>そして、更なる飛躍のために、
                        多くの人との出逢い、多くの企業様との出逢いを大切にしながら、モノ作りのプロセスにおいて、チャレンジ・スプリット：熱意に満ちた行動に加え、新たな着眼より「知識や経験を集約しビジネスをデザインする」このコンセプトのもと、更なる挑戦をして行きたく考えております。
                    </p>
                    <p class="margin-right">代表取締役社長　趙松天</p><br>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="layout">
                    <div class="title_r">会社概要</div>
                    <table class="job-listing">
                        <tr>
                            <th>商号</th>
                            <td>アジア人材開発株式会社<br>
                                Asia Human Development, Inc.</td>
                        </tr>
                        <tr>
                            <th>設立</th>
                            <td>2019年3月</td>
                        </tr>
                        <tr>
                            <th>代表者</th>
                            <td>代表取締役　趙松天</td>
                        </tr>
                        <tr>
                            <th>事業概要</th>
                            <td>SES/請負開発<br/>
                                IT導入支援<br/>
                                日本留学ナビ運営<br/>
                                EC事業</td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                            <td>〒171-0014<br/>
                                東京都豊島区池袋4-27-5 和田ビル502号<br/>
                                TEL： 03-3981-5090 （代表）<br/>
                                FAX： 03-3981-5092</td>
                        </tr>
                        <tr>
                            <th>最寄駅</th>
                            <td>JR 池袋駅 西口から徒歩10分</td>
                        </tr>
                        <tr>
                            <th>取引銀行</th>
                            <td>みずほ銀行　中野北口支店<br>
                                GMOあおぞらネット銀行
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


        <section class="sec-padding">
            <div class="container">
                <div class="row">
                    <div id="map" class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619.2611280535918!2d139.7094805379498!3d35.73796627717492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601892a013f7dbb3%3A0x951f540f2d58a6ad!2z44CSMTcxLTAwMTQgVG9reW8sIFRvc2hpbWEgQ2l0eSwgSWtlYnVrdXJvLCA0LWNoxY1tZeKIkjI34oiSNSDlkoznlLDjg5Pjg6sgNTAy!5e0!3m2!1sen!2sjp!4v1719909993290!5m2!1sen!2sjp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        <h4 class="section-title uppercase">運営サイト</h4>
                        <div class="title-line-8 yellow left"></div>
                    </div>

                    <a href="http://www.studyjapan.info/" target="_blank">
                        <div class="col-md-3 col-sm-6">
                            <div class="team-holder5 text-center bmargin">
                                <div class="image-holder">
                                    <div class="hover-box">
                                        <p class="text-white"> 日本No1の日本留学案内総合サイトです。
                                            78校以上の厳選された優良な日本語学校に留学できます。あなたの日本での成功をお手伝いします。
                                        </p>
                                    </div>
                                    <img src="{{ asset('images/navi.jpg') }}" alt="" class="img-responsive" />
                                </div>
                                <div class="clearfix"></div>
                                <br />
                                <h5 class="less-mar1">日本留学ナビ</h5>
                                {{-- <span class="text-yellow">Founder and CEO</span> --}}
                            </div>
                        </div>
                    </a>
                    <!--end item-->

                    <a href="https://asian-food.site/" target="_blank">
                        <div class="col-md-3 col-sm-6">
                            <div class="team-holder5 text-center bmargin">
                                <div class="image-holder">
                                    <div class="hover-box">
                                        <p class="text-white">日本国内の340万人の外国人消費者にアジア食品を提供するECモールです。日本語と英語を併用して利用できます。</p>
                                    </div>
                                    <img src="{{ asset('images/asfm.jpg') }}" alt="" class="img-responsive" />
                                </div>
                                <div class="clearfix"></div>
                                <br />
                                <h5 class="less-mar1">アジア食彩館</h5>
                                {{-- <span class="text-yellow">Architect</span> --}}
                            </div>
                        </div>
                    </a>
                    <!--end item-->

                    <a href="https://new-style.life/" target="_blank">
                        <div class="col-md-3 col-sm-6">
                            <div class="team-holder5 text-center bmargin">
                                <div class="image-holder">
                                    <div class="hover-box">
                                        <p class="text-white">日本国内消費者向けに商品を販売するECモールです。日本語と英語を併用して利用可能です。</p>
                                    </div>
                                    <img src="{{ asset('images/nsl.jpg') }}" alt="" class="img-responsive" />
                                </div>
                                <div class="clearfix"></div>
                                <br />
                                <h5 class="less-mar1">New Style Life（新生活）</h5>
                                {{-- <span class="text-yellow">Project Menager</span> --}}
                            </div>
                        </div>
                    </a>
                    <!--end item-->

                    <a href="https://madein-japan.com/" target="_blank">
                        <div class="col-md-3 col-sm-6">
                            <div class="team-holder5 text-center bmargin">
                                <div class="image-holder">
                                    <div class="hover-box">
                                        <p class="text-white">New Style Life（新生活）から日本製品だけ自動同期されるECモールです。日本製品を海外向けに販売できます。</p>
                                    </div>
                                    <img src="{{ asset('images/mdin.jpg') }}" alt="" class="img-responsive" />
                                </div>
                                <div class="clearfix"></div>
                                <br />
                                <h5 class="less-mar1">Made in Japan（日本製品）</h5>
                                {{-- <span class="text-yellow">Finance Manager</span> --}}
                            </div>
                        </div>
                    </a>
                    <!--end item-->
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
