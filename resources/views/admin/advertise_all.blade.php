<x-auth-layout>
    <section class="sec-padding">
        <div class="container">
            <div class="row">
                <h2 class="align-item">広告管理</h2>
                <div style="display: flex;">
                    <button class="new-entry-btn">
                        <a href="{{ route('admin.page.add') }}">
                        <h5>+ ページ登録</h5>
                        </a>
                    </button>
                    <button class="new-entry-btn">
                        <a href="{{ route('admin.section.add') }}">
                        <h5>+ セクション登録</h5>
                        </a>
                    </button>
                    <button class="new-entry-btn">
                        <a href="{{ route('admin.story.add') }}">
                        <h5>+ ストーリー登録</h5>
                        </a>
                    </button>
                </div>
            <table class="table-back">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ページ</th>
                        <th></th>
                        <th>タイプ</th>
                        <th>セクション</th>
                        <th></th>
                        <th>タイトル</th>
                        <th>体</th>
                        <th>画像</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stories as $key => $story)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $story->sectionStory->pageSection->name }}</td>
                        <td>
                            <button class="action-btn settings">
                                <a href="{{ route('admin.page.edit', $story->sectionStory->pageSection->id) }}">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                            </button>
                            <button class="action-btn delete" data-toggle="modal" 
                                data-target="#confirmPageDeleteModal_{{ $story->sectionStory->pageSection->id }}" 
                                data-id="{{ $story->sectionStory->pageSection->id }}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                        <td>{{ $story->sectionStory->type }}</td>
                        <td>{{ $story->sectionStory->section }}</td>
                        <td>
                            <button class="action-btn settings">
                                <a href="{{ route('admin.section.edit', $story->sectionStory->id) }}">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                            </button>
                            <button class="action-btn delete" data-toggle="modal" data-target="#confirmSectionDeleteModal_{{ $story->sectionStory->id }}" data-id="{{ $story->sectionStory->id }}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                        <td>{{ $story->title }}</td>
                        <td>
                            @if (mb_strlen($story->body) > 200)
                                {!! mb_substr($story->body, 0, 200) . '...' !!}
                            @else
                                {!! nl2br(e($story->body)) !!}
                            @endif
                        </td>
                        <td><img src="{{ asset('images/' . $story->image ) }}" alt="story-image" class="thumbnail"></td>
                        <td>
                            <button class="action-btn settings">
                                <a href="{{ route('admin.story.edit', $story->id) }}">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                            </button>
                            <button class="action-btn delete" data-toggle="modal" data-target="#confirmDeleteModal_{{ $story->id }}" data-id="{{ $story->id }}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Confirm Page Delete Modal -->
                    <div class="modal fade" id="confirmPageDeleteModal_{{ $story->sectionStory->pageSection->id }}" 
                        tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmDeleteModalLabel" style="text-align: center; width: 100%;">Are you Sure?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                        style="position: absolute; right: 15px; top: 15px;">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="text-align: center">
                                    The page and its stories will all be deleted permanently.
                                </div>
                                <div class="modal-footer">
                                    <form id="deletePageForm" method="POST" action="{{ route('admin.page.delete') }}">
                                        @csrf
                                        <input type="hidden" id="id" name="id" value="{{ $story->sectionStory->pageSection->id }}">
                                        <button type="submit" class="btn btn-success">Yes</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Confirm Section Delete Modal -->
                    <div class="modal fade" id="confirmSectionDeleteModal_{{ $story->sectionStory->id }}" 
                        tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmDeleteModalLabel" style="text-align: center; width: 100%;">Are you Sure?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                        style="position: absolute; right: 15px; top: 15px;">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="text-align: center">
                                    The section and its stories will all be deleted permanently.
                                </div>
                                <div class="modal-footer">
                                    <form id="deletePageForm" method="POST" action="{{ route('admin.section.delete') }}">
                                        @csrf
                                        <input type="hidden" id="id" name="id" value="{{ $story->sectionStory->id }}">
                                        <button type="submit" class="btn btn-success">Yes</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Confirm Delete Modal -->
                    <div class="modal fade" id="confirmDeleteModal_{{ $story->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmDeleteModalLabel" style="text-align: center; width: 100%;">Are you Sure?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                        style="position: absolute; right: 15px; top: 15px;">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="text-align: center">
                                    The story will be deleted permanently.
                                </div>
                                <div class="modal-footer">
                                    <form id="deleteStoryForm" method="POST" action="{{ route('admin.story.delete') }}">
                                        @csrf
                                        <input type="hidden" id="id" name="id" value="{{ $story->id }}">
                                        <button type="submit" class="btn btn-success">Yes</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </section>
</x-auth-layout>