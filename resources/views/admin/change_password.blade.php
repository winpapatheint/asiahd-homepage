<x-auth-layout>
    <style>
        h3 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
        }
        
        .btn1 {
            width: 100%;
            padding: 10px;
            background-color: #71ac34;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        
        .btn1:hover {
            background-color: #333;
        }
        
        .required {
            color: red;
            margin-left: 5px;
        }
        
        </style>
    <section class="sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="smart-forms bmargin">
                        <h3 class="raleway">パスワード修正</h3>
                        @include('components.messagebox')
                        <form method="POST" action="{{ route('admin.password.update') }}" id="updatePasswordForm">
                            @csrf
                            <div class="form-group">
                                <label for="oldPassword">古いパスワード<span class="required">*</span></label>
                                <input type="password" id="oldPassword" name="oldPassword" class="gui-password" value="{{ old('oldPassword') }}" required>
                                <span class="error" style="color:red" id="error-oldPassword"></span>
                                @error('oldPassword')
                                    <span class="error" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="newPassword">新しいパスワード<span class="required">*</span></label>
                                <input type="password" id="newPassword" name="newPassword" value="{{ old('newPassword') }}" required>
                                <span class="error" style="color:red" id="error-newPassword"></span>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">確認パスワード<span class="required">*</span></label>
                                <input type="password" id="confirmPassword" name="confirmPassword" value="{{ old('confirmPassword') }}" required>
                                <span class="error" style="color:red" id="error-confirmPassword"></span>
                            </div>
                            <button type="button" class="btn1" onclick="validateChangePasswordForm()">修正する</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function validateChangePasswordForm() {
            let isValid = true;
            document.querySelectorAll('#updatePasswordForm .error').forEach(el => el.textContent = '');

            const oldPassword = document.getElementById('oldPassword').value.trim();
            const newPassword = document.getElementById('newPassword').value.trim();
            const confirmPassword = document.getElementById('confirmPassword').value.trim();

            if (!oldPassword) {
                isValid = false;
                document.getElementById('error-oldPassword').textContent = '古いパスワードを入力してください。';
            }
            if (!newPassword) {
                isValid = false;
                document.getElementById('error-newPassword').textContent = '新しいパスワードを入力してください。';
            } else if (!confirmPassword) {
                isValid = false;
                document.getElementById('error-confirmPassword').textContent = '確認パスワードを入力してください。';
            } else if (newPassword != confirmPassword) {
                isValid = false;
                document.getElementById('error-confirmPassword').textContent = '確認パスワードが新しいパスワードと一致していることを確認してください。';
            }

            if (isValid) {
                document.getElementById('updatePasswordForm').submit();
            }
        }
    
        document.getElementById('sectionRegisterForm').addEventListener('submit', function(event) {
            event.preventDefault();
            validateSectionForm();
        });
    </script>
</x-auth-layout>