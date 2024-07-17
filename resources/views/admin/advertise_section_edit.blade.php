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
            <h1>セクション修正</h1>
            <form method="POST" action="{{ route('admin.section.update') }}" id="sectionEditForm">
                @csrf
                <input type="hidden" id="id" name="id" value="{{ $sectionStory->id }}">
                <div class="form-group">
                    <label for="page">ページ<span class="required">*</span></label>
                    <select name="page">
                        <option>ページを選択</option>
                        @foreach ($pageSections as $pageSection)
                        <option value="{{ $pageSection->id }}" {{ $pageSection->id == $sectionStory->page_section_id ? 'selected' : '' }}>{{ $pageSection->name }}</option>
                        @endforeach
                    </select>
                    <span class="error" style="color:red" id="error-page"></span>
                </div>
                <div class="form-group">
                    <label for="type">タイプ<span class="required">*</span></label>
                    <select name="type">
                        <option>タイプを選択</option>
                        <option value="list" {{ $sectionStory->type == 'list' ? 'selected' : ''  }}>List</option>
                        <option value="grid" {{ $sectionStory->type == 'grid' ? 'selected' : ''  }}>Grid</option>
                    </select>
                    <span class="error" style="color:red" id="error-type"></span>
                </div>
                <div class="form-group">
                    <label for="section">セクション<span class="required">*</span></label>
                    <input type="text" id="section" name="section" value="{{ $sectionStory->section }}" required>
                    <span class="error" style="color:red" id="error-section"></span>
                </div>
                <button type="button" onclick="validateSectionForm()">修正する</button>
            </form>
        </div>
    </section>
    <script>
        function validateSectionForm() {
            let isValid = true;
            document.querySelectorAll('#sectionEditForm .error').forEach(el => el.textContent = '');

            const page = document.querySelector('select[name="page"]').value;
            const type = document.querySelector('select[name="type"]').value;
            const section = document.getElementById('section').value.trim();

            if(!page || page == 'ページを選択') {
                isValid = false;
                document.getElementById('error-page').textContent = "有効なページを選択してください。";
            }

            if(!type || type == 'タイプを選択') {
                isValid = false;
                document.getElementById('error-type').textContent = "有効なタイプを選択してください。";
            }

            if (!section) {
                isValid = false;
                document.getElementById('error-section').textContent = 'セクション名を入力してください。';
            } else if (section.length > 255) {
                isValid = false;
                document.getElementById('error-section').textContent = 'セクション名は 255 文字を超えてはなりません。';
            }

            if (isValid) {
                document.getElementById('sectionEditForm').submit();
            }
        }
    
        document.getElementById('sectionEditForm').addEventListener('submit', function(event) {
            event.preventDefault();
            validateSectionForm();
        });
    </script>
</x-auth-layout>