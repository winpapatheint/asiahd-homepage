<x-auth-layout>
    <section class="sec-padding">
        <div class="container_p">
            <h1 class="h1-style">製品一覧修正</h1>
            <form method="POST" action="{{ route('update.project') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $projects->id }}">
                <input type="hidden" name="old_img" value="{{ $projects->image }}">
                <div class="form-group">
                    <label>タイトル<span class="required">*</span></label>
                    <input type="text" name="title" value="{{ $projects->title }}" required>
                </div>
                <div class="form-group">
                    <label>ファイルを選択<span class="required">*</span></label>
                    <input type="file" name="image">
                    <img src="{{ asset('images/' . $projects->image) }}" width="80">
                </div>
                <div class="form-group">
                    <label>内容<span class="required">*</span></label>
                    <textarea name="content" rows="5" required>{{ $projects->content }}</textarea>
                </div>
                <button class="btn-style" type="submit">修正する</button>
            </form>
        </div>
    </section>
</x-auth-layout>
