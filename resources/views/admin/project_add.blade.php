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
            <h1>新着情報登録</h1>
            <form>
                <div class="form-group">
                    <label for="title">タイトル<span class="required">*</span></label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="file">ファイルを選択</label>
                    <input type="file" id="file" name="file">
                </div>
                <div class="form-group">
                    <label for="content">内容<span class="required">*</span></label>
                    <textarea id="content" name="content" rows="10" required></textarea>
                </div>
                <button type="submit">登録する</button>
            </form>
        </div>
    </section>
</x-auth-layout>
