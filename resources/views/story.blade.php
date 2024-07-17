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
<style>
    .required::after {
        content: "必須";
        color: red;
        margin-left: 5px;
    }
    .optional::after {
        content: "任意";
        color: #999;
        margin-left: 5px;
    }
    .btn {
        display: block;
        width: 100%;
        padding: 15px;
        text-align: center;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    .error {
        display: block;
        text-align: left;
    }
</style>
</head>

<body>
    <!--start section-->
    <section class="sec-padding">
        {{-- list section --}}
        @if ($pageSection)
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3" style="text-align: center;">
                        <h1>{{ $pageSection->name }}</h1>
                        <div class="divider-line solid margin yellow"></div>
                    </div>
                </div>
            </div>
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
                            @if ($counter % 2 == 0)
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
        @else
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3" style="text-align: center;">
                        <h1>広告ページが見つかりません!</h1>
                        <div class="divider-line solid margin yellow"></div>
                    </div>
                </div>
            </div>
        @endif
        <!--end section-->
        {{-- start form section --}}
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="smart-forms bmargin">
                        <h3 class="raleway">お問い合わせフォーム</h3>
                        @include('components.messagebox')
                        <form id="Inquiry-Form" method="POST" action="{{ route('inquiry.store') }}">
                            @csrf
                            <div class="row section">
                                <div class="col-md-4">
                                    <label for="name" class="col-form-label required">ご氏名</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="例）渡辺　太郎">
                                    <span class="error" style="color:red" id="error-name"></span>
                                </div>
                            </div>
                            <div class="row section">
                                <div class="col-md-4">
                                    <label for="email" class="col-form-label required">メールアドレス</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="例）info@asia-hd.com">
                                    <span class="error" style="color:red" id="error-email"></span>
                                </div>
                            </div>
                            <div class="row section">
                                <div class="col-md-8 col-md-offset-4">
                                    <label for="confirm-email" style="text-align: left; display: block;">※確認のため、もう一度ご入力ください</label>
                                    <input type="email" class="form-control" id="confirm-email" name="confirm-email" placeholder="例）info@asia-hd.com">
                                    <span class="error" style="color:red" id="error-confirm-email"></span>
                                </div>
                            </div>
                            <div class="row section">
                                <div class="col-md-4">
                                    <label for="phone" class="col-form-label required">電話番号</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="例）0339815090">
                                    <span class="error" style="color:red" id="error-phone"></span>
                                </div>
                            </div>
                            <div class="row section">
                                <div class="col-md-4">
                                    <label for="age" class="col-form-label optional">年齢</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" id="age" name="age" placeholder="例）32">
                                </div>
                            </div>
                            <div class="row section">
                                <div class="col-md-4">
                                    <label for="postal-code" class="col-form-label optional">郵便番号</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="postal-code" name="postal-code" placeholder="例）171-0014">
                                </div>
                            </div>
                            <div class="row section">
                                <div class="col-md-4">
                                    <label for="prefecture" class="col-form-label optional">都道府県</label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" id="prefecture" name="prefecture">
                                        <option value="">選択してください</option>
                                        @foreach ($prefecture as $pref)
                                        <option value="{{ $pref->name }}">{{ $pref->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row section">
                                <div class="col-md-4">
                                    <label for="address" class="col-form-label optional">住所</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="例）豊島区池袋4-27-5">
                                </div>
                            </div>
                            <div class="row section">
                                <div class="col-md-4">
                                    <label for="building" class="col-form-label optional">建物名</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="building" name="building" placeholder="例）和田ビル502号">
                                </div>
                            </div>
                            <div class="row section">
                                <div class="col-md-4">
                                    <label for="inquiry" class="col-form-label optional">お問い合わせ内容</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="inquiry" name="inquiry" rows="4" placeholder="お電話をお掛けして良い曜日・時間帯があればご記入下さい。例）月〜金、14：00以降"></textarea>
                                </div>
                            </div>
                            <div class="form-group row section">
                                <div class="col-md-8 col-md-offset-4 custom-checkbox">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="privacy-policy" name="privacy-policy">
                                        <label class="form-check-label" for="privacy-policy">プライバシーポリシーに同意する</label>
                                    </div>
                                    <span class="error" style="color:red" id="error-privacy-policy"></span>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary yellow" onclick="validateInquiryForm()">送信する</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end form section --}}
    <section class="section-fulldark sec-padding">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 clearfix" style="display: flex; align-item: center; justify-content: center;">
                    <div class="footer-logo">
                        <img src="{{ asset('images/asia-hd_logo.png') }}" alt="" />
                        <ul class="address-info">
                            <li>〒171-0014 <br>
                                東京都豊島区池袋4-27-5和田ビル502号
                            </li>
                            <li><i class="fa fa-phone"></i> TEL: 03-3981-5090 （代表）</li>
                            <li><i class="fa fa-fax"></i> Fax: 03-3981-5092</li>
                            <li><i class="fa fa-envelope"></i> Email: info@asia-hd.com</li>
                            <li class="last"><i class="fa fa-link"></i> Url: <a href="http://www.asia-hd.com">http://www.asia-hd.com</a></li>
                        </ul>
                    </div>
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

<script>
    function validateInquiryForm() {
        let isValid = true;

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const confirmEmail = document.getElementById('confirm-email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const checkbox = document.getElementById('privacy-policy');

        document.querySelectorAll('.error').forEach(el => el.textContent = '');

        if (!name) {
            isValid = false;
            document.getElementById('error-name').textContent = '※ご氏名を入力してください';
        } else if (name.length > 255) {
            isValid = false;
            document.getElementById('error-name').textContent = '※ご氏名は 255 文字を超えてはなりません。';
        }

        if (!email) {
            isValid = false;
            document.getElementById('error-email').textContent = '※メールアドレスを入力してください';
        } else if (!/\S+@\S+\.\S+/.test(email)) {
            isValid = false;
            document.getElementById('error-email').textContent = '※有効なメールアドレスを入力してください。';
        }

        if (email) {
            if (!confirmEmail) {
                isValid = false;
                document.getElementById('error-confirm-email').textContent = '※確認のためメールアドレスを入力してください。';
            } else if (email != confirmEmail) {
                isValid = false;
                document.getElementById('error-confirm-email').textContent = '※同じメールアドレスを入力してください。';
            }
        }

        if (!phone) {
            isValid = false;
            document.getElementById('error-phone').textContent = '※電話番号を入力してください';
        } else if (!/^\d+$/.test(phone)) {
            isValid = false;
            document.getElementById('error-phone').textContent = '※有効な電話番号を入力してください。(例: 09077554361)';
        }

        if (!checkbox.checked) {
            isValid = false;
            document.getElementById('error-privacy-policy').textContent = '※お問い合わせいただくにはプライバシーポリシーに同意いただく必要があります。';
        }

        if (isValid) {
            document.getElementById('Inquiry-Form').submit();
        }

    }
</script>

</body>
</html>
