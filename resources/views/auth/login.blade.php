<x-guest-layout>
        <section>
            <div class="header-inner two">
                <div class="inner text-center">
                    <h4 class="title text-white uppercase">ログイン</h4>
                    <h5 class="text-white uppercase">Log In</h5>
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
                    <div class="col-md-12" style="display: flex; justify-content: center; height: 100vh;">
                        <div class="smart-forms bmargin">
                            <h3 class="raleway">Login</h3>
                            <br />
                            <br />
                            @include('components.messagebox')
                            <form method="post" action="{{ route('admin.login') }}" id="login-form">
                                @csrf
                                <div>
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="email" name="email" id="email"  value="{{ old('email') }}"
                                                class="gui-input" placeholder="Email" style="min-width: 400px;">
                                            <span class="field-icon"><i class="fa fa-user"></i></span> 
                                            <span class="error" style="color:red" id="error-email"></span>
                                        </label>
                                    </div>

                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="password" name="password" id="password"  value="{{ old('password') }}"
                                                class="gui-input" placeholder="Password" style="min-width: 400px;">
                                            <span class="field-icon"><i class="fa fa-key"></i></span>
                                            <span class="error" style="color:red" id="error-password"></span>
                                        </label>
                                    </div>

                                    <div class="result"></div>
                                </div>
                                <!-- end .form-body section -->
                                <div class="form-footer">
                                    <button type="button" class="button btn-primary yellow" onclick="validateLoginForm()">Login</button>
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
            document.getElementById("error-email").textContent = "Please provide your email";
        } else if (!/\S+@\S+\.\S+/.test(email)) {
            isValid = false;
            document.getElementById('error-email').textContent = 'Please provide a valid email address.';
        }

        if (!password) {
            isValid = false;
            document.getElementById("error-password").textContent = "Please provide your password";
        }

        if (isValid) {
            document.getElementById("login-form").submit();
        }
    }
</script>
</x-guest-layout>