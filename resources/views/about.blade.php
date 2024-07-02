<x-guest-layout>
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
                        <li class="dropdown"> <a href="{{ url('/about') }}" class="dropdown-toggle active">会社概要</a>
                            <ul class="dropdown-menu five" role="menu">
                                <li> <a href="construction.html">代表者挨拶</a></li>
                            </ul>
                        </li>
                        <li> <a href="{{ url('/project') }}" class="dropdown-toggle">開発実績</a></li>
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
                <h4 class="title text-white uppercase">About Us</h4>
                <h5 class="text-white uppercase">Get many More Features</h5>
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
                        <h3>About Us</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="pagenation_links"><a href="index.html">Home</a> <i>/</i> About Us</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class="sec-tpadding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 bmargin"> <img src="http://placehold.it/600x400" alt=""
                        class="img-responsive" /> <br />
                    <h5 class="uppercase less-mar1">joint ventures</h5>
                    <div class="divider-line solid margin yellow"></div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit Suspendisse et justo Praesent mattis
                        commodo augue Aliquam ornare augue. </p>
                    <br />
                    <a class="btn btn-yellow btn-round">Read more</a>
                </div>
                <!--end item-->

                <div class="col-md-6 bmargin"> <img src="http://placehold.it/600x400" alt=""
                        class="img-responsive" /> <br />
                    <h5 class="uppercase less-mar1">Consluting</h5>
                    <div class="divider-line solid margin yellow"></div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit Suspendisse et justo Praesent mattis
                        commodo augue Aliquam ornare augue. </p>
                    <br />
                    <a class="btn btn-yellow btn-round">Read more</a>
                </div>
                <!--end item-->

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

        {{-- <div class="container">
            <div class="row">
                <h5 class="uppercase less-mar1">組織体制</h5>
                <div class="divider-line solid margin yellow"></div>
                <div class="col-md-6"> <img src="https://asia-hd.com/img/institution2.jpg" class="img-responsive" /> <br />
            </div>
        </div> --}}

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="team-holder5 text-center bmargin">
                        <div class="image-holder">
                            <div class="hover-box">
                                <p class="text-white"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    mattis aliquet purus non elementum.</p>
                            </div>
                            <img src="http://placehold.it/400x450" alt="" class="img-responsive" />
                        </div>
                        <div class="clearfix"></div>
                        <br />
                        <h5 class="less-mar1">Elizabeth</h5>
                        <span class="text-yellow">Founder and CEO</span>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-3 col-sm-6">
                    <div class="team-holder5 text-center bmargin">
                        <div class="image-holder">
                            <div class="hover-box">
                                <p class="text-white"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Praesent mattis aliquet purus non elementum.</p>
                            </div>
                            <img src="http://placehold.it/400x450" alt="" class="img-responsive" />
                        </div>
                        <div class="clearfix"></div>
                        <br />
                        <h5 class="less-mar1">Alexander</h5>
                        <span class="text-yellow">Architect</span>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-3 col-sm-6">
                    <div class="team-holder5 text-center bmargin">
                        <div class="image-holder">
                            <div class="hover-box">
                                <p class="text-white"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Praesent mattis aliquet purus non elementum.</p>
                            </div>
                            <img src="http://placehold.it/400x450" alt="" class="img-responsive" />
                        </div>
                        <div class="clearfix"></div>
                        <br />
                        <h5 class="less-mar1">Addison</h5>
                        <span class="text-yellow">Project Menager</span>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-3 col-sm-6">
                    <div class="team-holder5 text-center bmargin">
                        <div class="image-holder">
                            <div class="hover-box">
                                <p class="text-white"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Praesent mattis aliquet purus non elementum.</p>
                            </div>
                            <img src="http://placehold.it/400x450" alt="" class="img-responsive" />
                        </div>
                        <div class="clearfix"></div>
                        <br />
                        <h5 class="less-mar1">Benjamin</h5>
                        <span class="text-yellow">Finance Manager</span>
                    </div>
                </div>
                <!--end item-->
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

</x-guest-layout>
