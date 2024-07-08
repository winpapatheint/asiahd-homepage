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
                        <li> <a href="{{ url('/recruit') }}" class="dropdown-toggle active">採用情報</a></li>
                        <li> <a href="{{ url('/contact') }}" class="dropdown-toggle">お問合せ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase">採用情報</h4>
                <h5 class="text-white uppercase">Recruit</h5>
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
                        <h3>Recruit</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="pagenation_links"><a href="index.html">Home</a> <i>/</i> Recruit</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <div class="layout">
        <div class="title_r">募集要項</div>
        <table class="job-listing">
            <tr>
                <th>職種</th>
                <td>システムエンジニア(SE)、プログラマ(PG)</td>
            </tr>
            <tr>
                <th>業務内容</th>
                <td>ソフトウェア開発およびそれに関連する業務</td>
            </tr>
            <tr>
                <th>雇用形態</th>
                <td>正社員、契約社員、アルバイト</td>
            </tr>
            <tr>
                <th>採用人員</th>
                <td>若干名（男女問わず、国籍不問）</td>
            </tr>
            <tr>
                <th>勤務地</th>
                <td>本社あるいは協力会社</td>
            </tr>
            <tr>
                <th>勤務時間</th>
                <td>午前9時～午後6時（勤務地により若干異なる）</td>
            </tr>
            <tr>
                <th>休日</th>
                <td>週休2日制（土、日）、祝日、その他</td>
            </tr>
            <tr>
                <th>賃金</th>
                <td>経験、能力を考慮の上、優遇致します</td>
            </tr>
            <tr>
                <th>待遇</th>
                <td>交通費支給、各社会保険完備</td>
            </tr>
            <tr>
                <th>その他</th>
                <td>就業規則、社内規定に従う</td>
            </tr>
        </table>
        <div class="apply-method">
            <div class="apply-header">応募方法</div>
            <div class="apply-content">
                履歴書および職務経歴書(書式は自由)をご郵送もしくは、<a href="mailto:recruit@asia-hd.com">recruit@asia-hd.com</a>宛まで送付して下さい。<br>
                追って詳細をご連絡いたします。<br>
                入社日は相談に応じます。応募の秘密は厳守します。
            </div>
        </div>
    </div>
</x-guest-layout>
