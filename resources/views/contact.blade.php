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
                    <li class="dropdown"> <a href="{{ url('/about') }}" class="dropdown-toggle">会社概要</a>
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
                            <li class="dropdown-submenu">
                                <a href="{{ url('/service4') }}" class="dropdown-toggle" data-toggle="dropdown">ECモール運営</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/service4_1') }}">アジア食彩館ECモール</a></li>
                                    <li><a href="{{ url('/service4_2') }}">New Style Life（新生活）ECモール</a></li>
                                </ul>
                            </li>
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
                <h4 class="title text-white uppercase">Contact</h4>
                <h5 class="text-white uppercase">Free freely contact us</h5>
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
                        <h3 class="raleway">Contact Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent
                            mattis commodo augue. Aliquam ornare hendrerit consectetuer adipiscing elit. Suspendisse
                            et justo. augue.</p>
                        <br />
                        <br />
                        <form method="post" action="php/smartprocess.php" id="smart-form">
                            <div>
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="sendername" id="sendername"
                                            class="gui-input" placeholder="Enter name">
                                        <span class="field-icon"><i class="fa fa-user"></i></span> </label>
                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="email" name="emailaddress" id="emailaddress"
                                            class="gui-input" placeholder="Email address">
                                        <span class="field-icon"><i class="fa fa-envelope"></i></span> </label>
                                </div>
                                <!-- end section -->

                                <div class="section colm colm6">
                                    <label class="field prepend-icon">
                                        <input type="tel" name="telephone" id="telephone" class="gui-input"
                                            placeholder="Telephone">
                                        <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="sendersubject" id="sendersubject"
                                            class="gui-input" placeholder="Enter subjec">
                                        <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span> </label>
                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <label class="field prepend-icon">
                                        <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message"></textarea>
                                        <span class="field-icon"><i class="fa fa-comments"></i></span> <span
                                            class="input-hint"> <strong>Hint:</strong> Please enter between 80 -
                                            300 characters.</span>
                                    </label>
                                </div>
                                <!-- end section -->

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
                                <!-- end .result  section -->

                            </div>
                            <!-- end .form-body section -->
                            <div class="form-footer">
                                <button type="submit" data-btntext-sending="Sending..."
                                    class="button btn-primary yellow">Submit</button>
                                <button type="reset" class="button"> Cancel </button>
                            </div>
                            <!-- end .form-footer section -->
                        </form>
                    </div>
                    <!-- end .smart-forms section -->

                </div>
                <div class="col-md-4 bmargin">
                    <h3 class="raleway">Address Info</h3>

                    <h6><strong>Company Name</strong></h6>
                    No.28 - 63739 street lorem ipsum City, Country <br />
                    Telephone: +1 1234-567-89000<br />
                    FAX: +1 0123-4567-8900<br />
                    <br />
                    E-mail: <a href="mailto:email@example.com">email@example.com</a><br />
                    Website: <a href="index.html">www.example.com</a>
                    <div class="clearfix"></div>
                    <br />
                    <h3 class="raleway">Find the Address</h3>
                    <div id="map" class="map">
                        <p>This will be replaced with the Google Map.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>
</x-guest-layout>
