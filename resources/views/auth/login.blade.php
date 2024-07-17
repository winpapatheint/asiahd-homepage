<x-guest-layout>
        <section>
            <div class="header-inner two">
                <div class="inner text-center">
                    <h4 class="title text-white uppercase">ログイン</h4>
                    <h5 class="text-white uppercase">Log In</h5>
                </div>
                <div class="overlay bg-opacity-5"></div>
                <img src="{{ asset('images/news.jpg') }}" alt="" class="img-responsive" />
            </div>
        </section>
        <!-- end header inner -->
        <div class="clearfix"></div>

        <section>
            <div class="pagenation-holder">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Log In</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="pagenation_links">Home <i>/</i> Log In</div>
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
                    <div class="col-md-4 col-md-offset-4">
                        <div class="smart-forms bmargin">
                            <h3 class="raleway">ログイン</h3>
                            <br />
                            <br />
                            @include('components.messagebox')
                            <form method="post" action="{{ route('admin.login') }}" id="login-form">
                                @csrf
                                <div>
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="email" name="email" id="email"  value="{{ old('email') }}"
                                                class="gui-input" placeholder="メール">
                                            <span class="field-icon"><i class="fa fa-user"></i></span> 
                                            <span class="error" style="color:red" id="error-email"></span>
                                        </label>
                                    </div>

                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="password" name="password" id="password"  value="{{ old('password') }}"
                                                class="gui-input" placeholder="パスワード">
                                            <span class="field-icon"><i class="fa fa-key"></i></span>
                                            <span class="error" style="color:red" id="error-password"></span>
                                        </label>
                                    </div>
                                    <div class="section">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="rememberMeCheckbox" 
                                            {{ old('remember') ? 'checked' : '' }} name="rememberMeCheckbox">
                                            <label class="form-check-label" for="rememberMeCheckbox">記憶する</label>
                                        </div>
                                    </div>

                                    <div class="result"></div>
                                </div>
                                <!-- end .form-body section -->
                                <div class="form-footer">
                                    <button type="button" class="button btn-primary yellow" onclick="validateLoginForm()">ログイン</button>
                                </div>
                            </form>
                        </div>
                        <!-- end .smart-forms section -->
                    </div>
                </div>
            </div>
        </section>
        <!--end section-->

<script>
    function validateLoginForm() {
        let isValid = true;
        var email = document.getElementById("email").value.trim();
        var password = document.getElementById("password").value.trim();

        if (!email) {
            isValid = false;
            document.getElementById("error-email").textContent = "メールアドレスを入力してください。";
        } else if (!/\S+@\S+\.\S+/.test(email)) {
            isValid = false;
            document.getElementById('error-email').textContent = '有効なメールアドレスを入力してください。';
        }

        if (!password) {
            isValid = false;
            document.getElementById("error-password").textContent = "パスワードを入力してください。";
        }

        if (isValid) {
            document.getElementById("login-form").submit();
        }
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var rememberMeCheckbox = document.getElementById('rememberMeCheckbox');
        var emailInput = document.getElementById('email');
        var passwordInput = document.getElementById('password');

        // Check if there is a stored cookie and set the checkbox accordingly
        if (document.cookie.includes('rememberMe=true')) {
            rememberMeCheckbox.checked = true;
            // If the "Remember Me" cookie is set, populate the email and password fields
            var rememberMeData = document.cookie.split('; ').find(row => row.startsWith('rememberMeData='));
            if (rememberMeData) {
                var data = rememberMeData.split('=')[1].split('|');
                emailInput.value = decodeURIComponent(data[0]);
                passwordInput.value = decodeURIComponent(data[1]);
            }
        }

        rememberMeCheckbox.addEventListener('change', function() {
            if (this.checked) {
                var email = emailInput.value.trim();
                var password = passwordInput.value.trim();
                // If checkbox is checked, set a cookie to remember the user
                var cookieValue = encodeURIComponent(email) + '|' + encodeURIComponent(password);
                document.cookie = 'rememberMeData=' + cookieValue + '; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
                document.cookie = 'rememberMe=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
            } else {
                // If checkbox is unchecked, remove the rememberMe cookie
                document.cookie = 'rememberMeData=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                document.cookie = 'rememberMe=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
            }
        });
    });
</script>    
</x-guest-layout>