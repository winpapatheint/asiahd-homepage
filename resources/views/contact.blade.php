<x-guest-layout>
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
                        <h3>Contact</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="pagenation_links"><a href="index.html">Home</a> <i>/</i> Contact</div>
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
                    <h3 class="raleway">Address Info</h3>

                    <h6><strong>アジア人材開発株式会社</strong></h6>
                    〒171-0014 <br>
                    東京都豊島区池袋4-27-5 和田ビル502号 <br />
                    Telephone: 03-3981-5090<br />
                    FAX: 03-3981-5092<br />
                    <br />
                    E-mail: <a href="mailto:email@example.com">info@asia-hd.com</a><br />

                    <div class="clearfix"></div>
                    <br />
                    <h3 class="raleway">Find the Address</h3>
                    <div id="map" class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619.2611280535918!2d139.7094805379498!3d35.73796627717492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601892a013f7dbb3%3A0x951f540f2d58a6ad!2z44CSMTcxLTAwMTQgVG9reW8sIFRvc2hpbWEgQ2l0eSwgSWtlYnVrdXJvLCA0LWNoxY1tZeKIkjI34oiSNSDlkoznlLDjg5Pjg6sgNTAy!5e0!3m2!1sen!2sjp!4v1719909993290!5m2!1sen!2sjp" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>
</x-guest-layout>
