<x-auth-layout>
    <section class="sec-padding">
        <div class="container_p">
            @include('components.messagebox')
            <h1 class="h1-style">新着情報登録</h1>
            <form method="POST" action="{{ url('/admin/news/save') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">タイトル<span class="required">*</span></label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="file">ファイルを選択<span class="required">*</span></label>
                    <input type="file" id="file" name="image" required>
                </div>
                <div class="form-group">
                    <label for="content">内容<span class="required">*</span></label>
                    <textarea id="content" name="content" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="list">リスト</label>
                    <div id="input-container">
                        <div class="input-wrapper">
                            <input type="text" id="list" name="list[]">
                            <button type="button" class="add-button">+</button>
                        </div>
                    </div>
                </div>
                <button class="btn-style" type="submit">登録する</button>
            </form>
        </div>
    </section>

    <script>
        document.getElementById('input-container').addEventListener('click', function(event) {
            if (event.target.classList.contains('add-button')) {
                addInputField(event.target);
            }
        });

        function addInputField(button) {
            var newInputWrapper = document.createElement('div');
            newInputWrapper.className = 'input-wrapper';

            var newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.name = 'list[]';

            var newButton = document.createElement('button');
            newButton.type = 'button';
            newButton.className = 'add-button';
            newButton.textContent = '+';

            newInputWrapper.appendChild(newInput);
            newInputWrapper.appendChild(newButton);

            button.parentElement.insertAdjacentElement('afterend', newInputWrapper);
        }
    </script>
</x-auth-layout>
