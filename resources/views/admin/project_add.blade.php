<x-auth-layout>
    <section class="sec-padding">
        <div class="container_p">
            <h1 class="h1-style">開発実績登録</h1>
            <form method="POST" action="{{ url('/admin/project/save') }}" enctype="multipart/form-data">
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
                <button class="btn-style" type="submit">登録する</button>
            </form>
        </div>
    </section>
</x-auth-layout>
