<x-auth-layout>
    <style>
        .container_p {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            width: 800px;
            max-width: 100%;
            display: block;
            margin: 0 auto;
        }
        
        h1 {
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
        
        input[type="text"],
        input[type="file"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
        }
        
        textarea {
            resize: vertical;
        }
        
        button {
            width: 100%;
            padding: 10px;
            background-color: #71ac34;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #333;
        }
        
        .required {
            color: red;
            margin-left: 5px;
        }
        
        </style>
    <section class="sec-padding">
        <div class="container_p">
            <h1>新しいページ登録</h1>
            <form method="POST" action="{{ route('admin.page.store') }}" id="pageRegisterForm">
                @csrf
                <div class="form-group">
                    <label for="name">名前<span class="required">*</span></label>
                    <input type="text" id="name" name="name" required>
                    <span class="error" style="color:red" id="error-name"></span>
                </div>
                <div class="form-group">
                    <label for="title">タイトル<span class="required">*</span></label>
                    <input type="text" id="title" name="title" required>
                    <span class="error" style="color:red" id="error-title"></span>
                </div>
                <button type="button" onclick="validatePageForm()">登録する</button>
            </form>
        </div>
    </section>
    <script>
        function validatePageForm() {
            let isValid = true;
            document.querySelectorAll('#pageRegisterForm .error').forEach(el => el.textContent = '');

            const name = document.getElementById('name').value.trim();
            const title = document.getElementById('title').value.trim();
            const namePattern = /^[a-zA-Z0-9-_]+$/; 

            if (!name) {
                isValid = false;
                document.getElementById('error-name').textContent = 'ページ名を入力してください';
            } else if (name.length > 255) {
                isValid = false;
                document.getElementById('error-name').textContent = 'ページ名は 255 文字以内でなければなりません';
            } else if (!namePattern.test(name)) {
                isValid = false;
                document.getElementById('error-name').textContent = 'ページ名には英数字、ダッシュ、およびアンダースコアのみを使用できます';
            }

            if (!title) {
                isValid = false;
                document.getElementById('error-title').textContent = 'ページのタイトルを入力してください';
            } else if (title.length > 255) {
                isValid = false;
                document.getElementById('error-title').textContent = 'ページタイトルは255文字以内でなければなりません';
            }

            if (isValid) {
                document.getElementById('pageRegisterForm').submit();
            }
        }
    
        document.getElementById('pageRegisterForm').addEventListener('submit', function(event) {
            event.preventDefault();
            validatePageForm();
        });
    </script>
</x-auth-layout>