<x-auth-layout>
    <section class="sec-padding">
        <div class="container_p">
            <h1 class="h1-style">新着情報修正</h1>
            <form method="POST" action="{{ route('update.news') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $news->id }}">
                <input type="hidden" name="old_img" value="{{ $news->image }}">
                <div class="form-group">
                    <label for="title">タイトル<span class="required">*</span></label>
                    <input type="text" id="title" name="title" value="{{ $news->title }}" required>
                </div>
                <div class="form-group">
                    <label for="file">ファイルを選択<span class="required">*</span></label>
                    <input type="file" id="file" name="image">
                    <img src="{{ asset('images/' . $news->image) }}" width="80">
                </div>
                <div class="form-group">
                    <label for="content">内容<span class="required">*</span></label>
                    <textarea id="content" name="content" rows="5" required>{{ $news->content }}</textarea>
                </div>

                @foreach ($news->list as $item)
                    <div class="form-group">
                        <label for="list">リスト</label>
                        <div id="input-container">
                            <div class="input-wrapper">
                                <input type="text" id="list" name="list[]" value="{{ $item }}">
                                <button type="button" class="add-button">+</button>
                            </div>
                        </div>
                    </div>
                @endforeach
                <button class="btn-style" type="submit">修正する</button>
            </form>
        </div>
    </section>
</x-auth-layout>
