<x-auth-layout>
    <section class="sec-padding">
        <div class="container">
            <div class="row">
                @include('components.messagebox')
                <h2 class="align-item">新着情報管理</h2>
                <a href="{{ route('add.news') }}">
                    <button class="new-entry-btn">
                        <h5>+ 新規登録</h5>
                    </button>
                </a>

                <table class="table-back">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>作成日</th>
                            <th>タイトル</th>
                            <th>イメージ写真</th>
                            <th class="content-column">内容</th>
                            <th>アクション</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($news->isEmpty())
                            <tr>
                                <td colspan="9">No data available</td>
                            </tr>
                        @else
                            @foreach ($news as $key => $item)
                                <tr>
                                    <td>{{ $ttl + 1 - ($news->firstItem() + $key) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('Y/m/d') }}</td>
                                    <td>{{$item->title}}</td>
                                    <td>
                                        <img width="50" height="50" src="{{ asset('images/' . $item->image) }}">
                                    </td>
                                    <td class="content-column">
                                        @if (mb_strlen($item->content) > 200)
                                            {!! nl2br(e(mb_substr($item->content, 0, 200) . '...')) !!}
                                        @else
                                            {!! nl2br(e($item->content)) !!}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('edit.news', $item->id) }}"><button
                                                class="action-btn settings"><i class="fa fa-pencil-square-o"></i></button></a>
                                        {{-- <a href="{{ route('delete.news', $item->id) }}"><button
                                                class="action-btn delete"><i class="fa fa-trash"></i></button></a> --}}
                                        <button class="action-btn delete" data-toggle="modal" 
                                            data-target="#confirmNewDeleteModal_{{ $item->id }}" 
                                            data-id="{{ $item->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Confirm New Delete Modal -->
                                <div class="modal fade" id="confirmNewDeleteModal_{{ $item->id }}" 
                                    tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirmDeleteModalLabel" style="text-align: center; width: 100%;">削除ですか？</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                                    style="position: absolute; right: 15px; top: 15px;">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align: center">
                                                この新着情報は削除されます。
                                            </div>
                                            <div class="modal-footer">
                                                <form id="deleteNewForm" method="GET" action="{{ route('delete.news', $item->id) }}">
                                                    @csrf
                                                    <input type="hidden" id="id" name="id" value="{{ $item->id }}">
                                                    <button type="submit" class="btn btn-success">はい</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">いいえ</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                @include('components.pagination')
            </div>
        </div>
    </section>
</x-auth-layout>
