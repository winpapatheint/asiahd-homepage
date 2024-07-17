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
            <h1>ページ修正</h1>
            <form method="POST" action="{{ route('admin.page.update') }}" id="pageEditForm">
                @csrf
                <input type="hidden" id="id" name="id" value="{{ $pageSection->id }}">
                <div class="form-group">
                    <label for="name">名前<span class="required">*</span></label>
                    <input type="text" id="name" name="name" value="{{ $pageSection->name }}" required>
                    <span class="error" style="color:red" id="error-name"></span>
                </div>
                <button type="button" onclick="validatePageForm()">修正する</button>
            </form>
        </div>
    </section>
    <script>
        function validatePageForm() {
            let isValid = true;
            document.querySelectorAll('#pageEditForm .error').forEach(el => el.textContent = '');

            const name = document.getElementById('name').value.trim();

            if (!name) {
                isValid = false;
                document.getElementById('error-name').textContent = 'Please provide your page name.';
            } else if (name.length > 255) {
                isValid = false;
                document.getElementById('error-name').textContent = 'Your page name must not exceed 255 characters.';
            }

            if (isValid) {
                document.getElementById('pageEditForm').submit();
            }
        }
    
        document.getElementById('pageEditForm').addEventListener('submit', function(event) {
            event.preventDefault();
            validatePageForm();
        });
    </script>
</x-auth-layout>