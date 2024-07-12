<x-auth-layout>
        <section class="sec-padding">
            <div class="container">
                <div class="row">
                    <h2 class="align-item">開発実績管理</h2>
                <a href="{{ url('/admin/project/add') }}">
                    <button class="new-entry-btn"><h5>+ 新規登録</h5></button>
                </a>
                <table class="table-back">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>作成日</th>
                            <th>イメージ写真</th>
                            <th>タイトル</th>
                            <th>アクション</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2022/11/23 10:32</td>
                            <td><img src="image.jpg" alt="イメージ写真" class="thumbnail"></td>
                            <td>リリースのお知らせ</td>
                            <td>
                                <button class="action-btn settings"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="action-btn delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2022/11/23 10:32</td>
                            <td><img src="image.jpg" alt="イメージ写真" class="thumbnail"></td>
                            <td>リリースのお知らせ</td>
                            <td>
                                <button class="action-btn settings"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="action-btn delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </section>
</x-auth-layout>