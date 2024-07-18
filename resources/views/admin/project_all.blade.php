<x-auth-layout>
    <section class="sec-padding">
        <div class="container">
            <div class="row">
                @include('components.messagebox')
                <h2 class="align-item">製品一覧管理</h2>
                <a href="{{ route('add.project') }}">
                    <button class="new-entry-btn">
                        <h5>+ 新規登録</h5>
                    </button>
                </a>
                <table class="table-back">
                    <thead>
                        <tr class="table-tr">
                            <th>#</th>
                            <th>作成日</th>
                            <th>タイトル</th>
                            <th>イメージ写真</th>
                            <th class="content-column">内容</th>
                            <th>アクション</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($projects->isEmpty())
                            <tr>
                                <td colspan="9">No data available</td>
                            </tr>
                        @else
                            @foreach ($projects as $key => $item)
                                <tr>
                                    <td>{{ $ttl + 1 - ($projects->firstItem() + $key) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('Y/m/d') }}</td>
                                    <td>{{$item->title}}</td>
                                    <td>
                                        <img width="50" height="50"
                                        src="{{ asset('images/' . $item->image) }}">
                                    </td>
                                    <td class="content-column">{!! nl2br(e($item->content)) !!}</td>
                                    <td>
                                        <a href="{{ route('edit.project', $item->id) }}"><button class="action-btn settings"><i class="fa fa-pencil-square-o"></i></button></a>
                                        <a href="{{ route('delete.project', $item->id) }}"><button class="action-btn delete"><i class="fa fa-trash"></i></button></a>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                @include('components.pagination')
            </div>
        </div>
    </section>

</x-auth-layout>
