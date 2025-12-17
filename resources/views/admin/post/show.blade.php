@extends('admin.layout')

@section('title', $post->title)

@section('header')
<div class="mb-4">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h2><i class="fas fa-eye"></i> Chi Tiết Bài Viết</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Bài viết</a></li>
                    <li class="breadcrumb-item active">{{ $post->title }}</li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Sửa
            </a>
            <button type="button" class="btn btn-danger" onclick="deletePost()">
                <i class="fas fa-trash"></i> Xóa
            </button>
            <form id="delete-form" 
                  action="{{ route('admin.posts.destroy', $post) }}" 
                  method="POST" 
                  style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
</div>
@endsection

@section('body')
<div class="row">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-body">
                @if($post->thumbnail)
                    <div class="text-center mb-4">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" 
                             alt="{{ $post->title }}" 
                             class="img-fluid rounded shadow"
                             style="max-height: 500px; object-fit: cover;">
                    </div>
                @endif

                <h1 class="mb-3">{{ $post->title }}</h1>

                <div class="mb-4">
                    <span class="badge bg-secondary me-2">
                        <i class="fas fa-link"></i> {{ $post->slug }}
                    </span>
                    <span class="badge bg-primary me-2">
                        <i class="fas fa-calendar"></i> {{ $post->created_at->format('d/m/Y H:i') }}
                    </span>
                    @if($post->created_at != $post->updated_at)
                        <span class="badge bg-success">
                            <i class="fas fa-clock"></i> Cập nhật: {{ $post->updated_at->format('d/m/Y H:i') }}
                        </span>
                    @endif
                </div>

                @if($post->description)
                    <div class="alert alert-light border-start border-4 border-primary">
                        <h6 class="alert-heading">
                            <i class="fas fa-info-circle"></i> Mô tả ngắn
                        </h6>
                        <p class="mb-0">{{ $post->description }}</p>
                    </div>
                @endif

                <div class="card mt-4">
                    <div class="card-header bg-light">
                        <h5 class="mb-0"><i class="fas fa-file-alt"></i> Nội dung bài viết</h5>
                    </div>
                    <div class="card-body">
                        <div style="white-space: pre-wrap; line-height: 1.8; font-size: 1.05rem;">
                            {{ $post->content }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm mb-3">
            <div class="card-header bg-info text-white">
                <h6 class="mb-0"><i class="fas fa-info-circle"></i> Thông Tin</h6>
            </div>
            <div class="card-body">
                <table class="table table-sm mb-0">
                    <tbody>
                        <tr>
                            <td class="text-muted" width="100">ID:</td>
                            <td><strong>{{ $post->id }}</strong></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Slug:</td>
                            <td><code class="small">{{ $post->slug }}</code></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Ngày tạo:</td>
                            <td>
                                {{ $post->created_at->format('d/m/Y') }}
                                <br>
                                <small class="text-muted">{{ $post->created_at->format('H:i:s') }}</small>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">Cập nhật:</td>
                            <td>
                                {{ $post->updated_at->format('d/m/Y') }}
                                <br>
                                <small class="text-muted">{{ $post->updated_at->format('H:i:s') }}</small>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">Có ảnh:</td>
                            <td>
                                @if($post->thumbnail)
                                    <span class="badge bg-success">
                                        <i class="fas fa-check"></i> Có
                                    </span>
                                @else
                                    <span class="badge bg-secondary">
                                        <i class="fas fa-times"></i> Không
                                    </span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">Có mô tả:</td>
                            <td>
                                @if($post->description)
                                    <span class="badge bg-success">
                                        <i class="fas fa-check"></i> Có
                                    </span>
                                @else
                                    <span class="badge bg-secondary">
                                        <i class="fas fa-times"></i> Không
                                    </span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h6 class="mb-0"><i class="fas fa-cog"></i> Thao Tác</h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Quay lại danh sách
                    </a>
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Chỉnh sửa
                    </a>
                    <button type="button" class="btn btn-danger" onclick="deletePost()">
                        <i class="fas fa-trash"></i> Xóa bài viết
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
function deletePost() {
    if (confirm('Bạn có chắc chắn muốn xóa bài viết này?\\n\\nHành động này không thể hoàn tác!')) {
        document.getElementById('delete-form').submit();
    }
}
</script>
@endsection
