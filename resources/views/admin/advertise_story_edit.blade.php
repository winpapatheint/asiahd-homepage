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
            <h1>ストーリー修正</h1>
            <form method="POST" action="{{ route('admin.story.update') }}" id="storyEditForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id" name="id" value="{{ $story->id }}">
                <div class="form-group">
                    <label for="section">セクション<span class="required">*</span></label>
                    <select name="section">
                        <option>Choose Section</option>
                        @foreach ($sectionStories as $sectionStory)
                            <option value="{{ $sectionStory->id }}" {{ $sectionStory->id == $story->section_story_id ? 'selected' : '' }}>{{ $sectionStory->section }}</option>
                        @endforeach
                    </select>
                    <span class="error" style="color:red" id="error-section"></span>
                </div>
                <div class="form-group">
                    <label for="title">タイトル<span class="required">*</span></label>
                    <input type="text" id="title" name="title" value="{{ $story->title }}" required>
                    <span class="error" style="color:red" id="error-title"></span>
                </div>
                <div class="form-group">
                    <label for="body">体<span class="required">*</span></label>
                    <textarea name="body" id="body" rows="10" required>{{ $story->body }}</textarea>
                    <span class="error" style="color:red" id="error-body"></span>
                </div>
                <div class="form-group">
                    <label for="image">画像</label>
                    <input type="file" id="image" name="image" value="{{ $story->image }}">
                    @if($story->image)
                        <div>
                            <img src="{{ asset('images/' . $story->image) }}" alt="Current Image" style="max-width: 100px; height: auto; margin-top: 10px;">
                        </div>
                    @endif
                    <span class="error" style="color:red" id="error-image"></span>
                </div>
                <button type="button" onclick="validateStoryForm()">修正する</button>
            </form>
        </div>
    </section>
    <script>
        function validateStoryForm() {
            let isValid = true;
            document.querySelectorAll('#storyRegisterForm .error').forEach(el => el.textContent = '');

            const section = document.querySelector('select[name="section"]').value;
            const title = document.getElementById('title').value.trim();
            const body = document.getElementById('body').value.trim();
            const image = document.getElementById('image').files[0];
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

            if(!section || section == 'Choose Section') {
                isValid = false;
                document.getElementById('error-section').textContent = "Please select a valid section.";
            }

            if (!title) {
                isValid = false;
                document.getElementById('error-title').textContent = 'Please provide your title.';
            } else if (title.length > 255) {
                isValid = false;
                document.getElementById('error-title').textContent = 'Your title must not exceed 255 characters.';
            }

            if (!body) {
                isValid = false;
                document.getElementById('error-body').textContent = 'Please provide your body.';
            }

            if (!image) {
                isValid = false;
                document.getElementById('error-image').textContent = 'Please provide your image.';
            } else if (!allowedExtensions.exec(image.name)) {
                isValid = false;
                document.getElementById('error-image').textContent = 'Please choose a valid image.';
            }

            if (isValid) {
                document.getElementById('storyEditForm').submit();
            }
        }
    
        document.getElementById('storyEditForm').addEventListener('submit', function(event) {
            event.preventDefault();
            validateSectionForm();
        });
    </script>
</x-auth-layout>