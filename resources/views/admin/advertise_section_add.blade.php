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
            <h1>新しいセクション登録</h1>
            <form method="POST" action="{{ route('admin.section.store') }}" id="sectionRegisterForm">
                @csrf
                <div class="form-group">
                    <label for="type">タイプ<span class="required">*</span></label>
                    <select name="type">
                        <option>Choose Type</option>
                        <option value="list">List</option>
                        <option value="grid">Grid</option>
                    </select>
                    <span class="error" style="color:red" id="error-type"></span>
                </div>
                <div class="form-group">
                    <label for="section">セクション<span class="required">*</span></label>
                    <input type="text" id="section" name="section" required>
                    <span class="error" style="color:red" id="error-section"></span>
                </div>
                <button type="button" onclick="validateSectionForm()">登録する</button>
            </form>
        </div>
    </section>
    <script>
        function validateSectionForm() {
            let isValid = true;
            document.querySelectorAll('#sectionRegisterForm .error').forEach(el => el.textContent = '');

            const type = document.querySelector('select[name="type"]').value;
            const section = document.getElementById('section').value.trim();

            if(!type || type == 'Choose Type') {
                isValid = false;
                document.getElementById('error-type').textContent = "Please select a valid type.";
            }

            if (!section) {
                isValid = false;
                document.getElementById('error-section').textContent = 'Please provide your section name.';
            } else if (section.length > 255) {
                isValid = false;
                document.getElementById('error-section').textContent = 'Your section name must not exceed 255 characters.';
            }

            if (isValid) {
                document.getElementById('sectionRegisterForm').submit();
            }
        }
    
        document.getElementById('sectionRegisterForm').addEventListener('submit', function(event) {
            event.preventDefault();
            validateSectionForm();
        });
    </script>
</x-auth-layout>