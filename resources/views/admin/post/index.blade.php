@extends('admin.layout')
@section('title', 'Danh sách sản phẩm')
@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-newspaper"></i> Quản Lý Bài Viết</h2>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Thêm Bài Viết
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        @if($posts->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th width="50">#</th>
                            <th width="80">Ảnh</th>
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>
                            <th width="120">Ngày tạo</th>
                            <th width="180" class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>
                                    @if($post->thumbnail)
                                        <img src="{{ asset('storage/' . $post->thumbnail) }}" 
                                             alt="{{ $post->title }}" 
                                             class="img-thumbnail" 
                                             style="width: 60px; height: 60px; object-fit: cover;">
                                    @else
                                        <div class="bg-secondary text-white d-flex align-items-center justify-content-center rounded" 
                                             style="width: 60px; height: 60px;">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <strong>{{ $post->title }}</strong>
                                    <br>
                                    <small class="text-muted">
                                        <i class="fas fa-link"></i> {{ $post->slug }}
                                    </small>
                                </td>
                                <td>
                                    @if($post->description)
                                        {{ Str::limit($post->description, 60) }}
                                    @else
                                        <span class="text-muted">Không có mô tả</span>
                                    @endif
                                </td>
                                <td>
                                    <small>{{ $post->created_at->format('d/m/Y') }}</small>
                                    <br>
                                    <small class="text-muted">{{ $post->created_at->format('H:i') }}</small>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.posts.show', $post) }}" 
                                           class="btn btn-sm btn-info text-white" 
                                           title="Xem chi tiết">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.posts.edit', $post) }}" 
                                           class="btn btn-sm btn-warning" 
                                           title="Chỉnh sửa">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button type="button"
                                                class="btn btn-sm btn-danger" 
                                                title="Xóa"
                                                onclick="deletePost({{ $post->id }})">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                    
                                    <form id="delete-form-{{ $post->id }}" 
                                          action="{{ route('admin.posts.destroy', $post) }}" 
                                          method="POST" 
                                          style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $posts->links() }}
            </div>
        @else
            <div class="alert alert-info text-center mb-0">
                <i class="fas fa-info-circle fa-2x mb-3"></i>
                <h5>Chưa có bài viết nào</h5>
                <p class="mb-3">Hãy tạo bài viết đầu tiên của bạn!</p>
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tạo bài viết mới
                </a>
            </div>
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script>
function deletePost(postId) {
    if (confirm('Bạn có chắc chắn muốn xóa bài viết này? Hành động này không thể hoàn tác!')) {
        document.getElementById('delete-form-' + postId).submit();
    }
}
</script>
@endsection
