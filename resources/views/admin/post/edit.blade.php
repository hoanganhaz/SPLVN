@extends('admin.layout')
@section('title', 'Danh sách sản phẩm')
@section('body')
 <div class="mb-4">
    <h2><i class="fas fa-edit"></i> Chỉnh Sửa Bài Viết</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Bài viết</a></li>
            <li class="breadcrumb-item active">Chỉnh sửa</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-warning">
                <h5 class="mb-0"><i class="fas fa-file-alt"></i> Thông Tin Bài Viết</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">
                            Tiêu đề <span class="text-danger">*</span>
                        </label>
                        <input type="text" 
                               class="form-control @error('title') is-invalid @enderror" 
                               id="title" 
                               name="title" 
                               value="{{ old('title', $post->title) }}" 
                               required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">
                            Mô tả ngắn
                        </label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" 
                                  name="description" 
                                  rows="3">{{ old('description', $post->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">
                            Nội dung <span class="text-danger">*</span>
                        </label>
                        <textarea class="form-control @error('content') is-invalid @enderror" 
                                  id="content" 
                                  name="content" 
                                  rows="15" 
                                  required>{{ old('content', $post->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror>
                    </div>

                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">
                            <i class="fas fa-image"></i> Ảnh đại diện
                        </label>
                        
                        @if($post->thumbnail)
                            <div class="mb-3">
                                <p class="text-muted small mb-2">Ảnh hiện tại:</p>
                                <div class="position-relative d-inline-block">
                                    <img src="{{ asset('storage/' . $post->thumbnail) }}" 
                                         alt="{{ $post->title }}" 
                                         class="img-thumbnail" 
                                         style="max-width: 300px;">
                                </div>
                            </div>
                        @endif

                        <input type="file" 
                               class="form-control @error('thumbnail') is-invalid @enderror" 
                               id="thumbnail" 
                               name="thumbnail"
                               accept="image/*"
                               onchange="previewImage(event)">
                        @error('thumbnail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-muted">Chọn ảnh mới nếu muốn thay đổi. Định dạng: JPG, PNG, GIF. Tối đa: 2MB</small>
                        
                        <div class="mt-3" id="imagePreview"></div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Quay lại
                        </a>
                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-save"></i> Cập nhật
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm mb-3">
            <div class="card-header bg-secondary text-white">
                <h6 class="mb-0"><i class="fas fa-info-circle"></i> Thông tin</h6>
            </div>
            <div class="card-body">
                <table class="table table-sm mb-0">
                    <tr>
                        <td class="text-muted">ID:</td>
                        <td><strong>{{ $post->id }}</strong></td>
                    </tr>
                    <tr>
                        <td class="text-muted">Slug:</td>
                        <td><code>{{ $post->slug }}</code></td>
                    </tr>
                    <tr>
                        <td class="text-muted">Ngày tạo:</td>
                        <td>{{ $post->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Cập nhật:</td>
                        <td>{{ $post->updated_at->format('d/m/Y H:i') }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-danger text-white">
                <h6 class="mb-0"><i class="fas fa-trash"></i> Xóa bài viết</h6>
            </div>
            <div class="card-body">
                <p class="text-muted small mb-3">Hành động này không thể hoàn tác. Bài viết sẽ bị xóa vĩnh viễn.</p>
                <form action="{{ route('admin.posts.destroy', $post) }}" 
                      method="POST"
                      onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài viết này? Hành động này không thể hoàn tác!');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm w-100">
                        <i class="fas fa-trash"></i> Xóa bài viết
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
function previewImage(event) {
    const preview = document.getElementById('imagePreview');
    const file = event.target.files[0];
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.innerHTML = `
                <div class="alert alert-success">
                    <p class="mb-2"><strong>Ảnh mới sẽ thay thế ảnh hiện tại:</strong></p>
                    <img src="${e.target.result}" class="img-fluid rounded" style="max-height: 300px;">
                </div>
            `;
        }
        reader.readAsDataURL(file);
    } else {
        preview.innerHTML = '';
    }
}
</script>
@endsection
