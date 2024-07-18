<x-guest-layout>
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
                            @include('components.messagebox')
                            <form action="{{ route('contact.send') }}" method="POST" id="Contact-Form">
                                @csrf
                                <div>
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <select name="subject" id="subject"
                                                class="gui-input" placeholder="件名">
                                                <option>件名を選択</option>
                                                <option value="SES/請負開発について">SES/請負開発について</option>
                                                <option value="IT導入について">IT導入について</option>
                                                <option value="日本留学について">日本留学について</option>
                                                <option value="EC/ECモール構築について">EC/ECモール構築について</option>
                                                <option value="その他">その他</option>
                                            </select>
                                            <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span>
                                        </label>
                                        <span class="error" style="color:red" id="error-subject"></span>
                                    </div>

                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="name" id="name" class="gui-input"
                                                placeholder="名前">
                                            <span class="field-icon"><i class="fa fa-user"></i></span> 
                                        </label>
                                        <span class="error" style="color:red" id="error-name"></span>
                                    </div>

                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="email" name="email" id="email" class="gui-input"
                                                placeholder="メール">
                                            <span class="field-icon"><i class="fa fa-envelope"></i></span> 
                                        </label>
                                        <span class="error" style="color:red" id="error-email"></span>
                                    </div>

                                    <div class="section colm colm6">
                                        <label class="field prepend-icon">
                                            <input type="tel" name="phone" id="phone" class="gui-input"
                                                placeholder="TEL">
                                            <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                                        </label>
                                        <span class="error" style="color:red" id="error-phone"></span>
                                    </div>

                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="message" name="message" placeholder="内容"></textarea>
                                            <span class="field-icon">
                                                <i class="fa fa-comments"></i>
                                            </span>
                                        </label>
                                        <span class="error" style="color:red" id="error-message"></span>
                                    </div>

                                    <div class="result"></div>
                                </div>
                                <!-- end .form-body section -->

                                <div class="form-footer">
                                    <button type="button" data-btntext-sending="Sending..." onclick="validateContactForm()"
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
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619.2611280535918!2d139.7094805379498!3d35.73796627717492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601892a013f7dbb3%3A0x951f540f2d58a6ad!2z44CSMTcxLTAwMTQgVG9reW8sIFRvc2hpbWEgQ2l0eSwgSWtlYnVrdXJvLCA0LWNoxY1tZeKIkjI34oiSNSDlkoznlLDjg5Pjg6sgNTAy!5e0!3m2!1sen!2sjp!4v1719909993290!5m2!1sen!2sjp"
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end section-->
        <script>
            function validateContactForm() {
                let isValid = true;
                document.querySelectorAll('#Contact-Form .error').forEach(el => el.textContent = '');

                const subject = document.querySelector('select[name="subject"]').value;
                const name = document.getElementById('name').value.trim();
                const email = document.getElementById('email').value.trim();
                const phone = document.getElementById('phone').value.trim();
                const message = document.getElementById('message').value.trim();

                if(!subject || subject == '件名を選択') {
                    isValid = false;
                    document.getElementById('error-subject').textContent = "件名を選択してください";
                }

                if (!name) {
                    isValid = false;
                    document.getElementById('error-name').textContent = 'お名前を入力してください';
                } else if (name.length > 255) {
                    isValid = false;
                    document.getElementById('error-name').textContent = 'お名前は 255 文字以内でなければなりません';
                }

                if (!email) {
                    isValid = false;
                    document.getElementById('error-email').textContent = '※メールアドレスを入力してください';
                } else if (!/\S+@\S+\.\S+/.test(email)) {
                    isValid = false;
                    document.getElementById('error-email').textContent = '有効なメールアドレスを入力してください';
                }

                if (!phone) {
                    isValid = false;
                    document.getElementById('error-phone').textContent = '電話番号を入力してください';
                } else if (!/^\d+$/.test(phone)) {
                    isValid = false;
                    document.getElementById('error-phone').textContent = '有効な電話番号を入力してください。(例: 09077554361)';
                }

                if (!message) {
                    isValid = false;
                    document.getElementById('error-message').textContent = 'メッセージを入力してください';
                }

                if (isValid) {
                    document.getElementById('Contact-Form').submit();
                }
            }
        </script>
</x-guest-layout>