@extends('admin.layout')
@section('title', 'Danh sách sản phẩm')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="mb-4">
        <h2><i class="fas fa-plus-circle"></i> Thêm Bài Viết Mới</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Bài viết</a></li>
                <li class="breadcrumb-item active">Thêm mới</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-file-alt"></i> Thông Tin Bài Viết</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">
                                Tiêu đề <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" value="{{ old('title') }}" placeholder="Nhập tiêu đề bài viết..." required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">
                                Mô tả ngắn
                            </label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                rows="3" placeholder="Nhập mô tả ngắn cho bài viết...">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Mô tả này sẽ hiển thị trong danh sách bài viết</small>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">
                                Nội dung <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="15"
                                placeholder="Nhập nội dung bài viết...">{{ old('content') }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">
                                <i class="fas fa-image"></i> Ảnh đại diện
                            </label>
                            <input type="file" class="form-control @error('thumbnail') is-invalid @enderror"
                                id="thumbnail" name="thumbnail" accept="image/*" onchange="previewImage(event)">
                            @error('thumbnail')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Định dạng: JPG, PNG, GIF. Tối đa: 2MB</small>

                            <div class="mt-3" id="imagePreview"></div>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Quay lại
                            </a>
                            <button class="btn btn-primary">
                                <i class="fas fa-save"></i> Lưu bài viết
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                    <h6 class="mb-0"><i class="fas fa-info-circle"></i> Hướng dẫn</h6>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-check text-success"></i> Tiêu đề nên ngắn gọn và rõ ràng
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success"></i> Mô tả ngắn giúp người đọc hiểu nội dung
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success"></i> Slug sẽ tự động tạo từ tiêu đề
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success"></i> Ảnh đại diện nên có kích thước 800x600px
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#content'), {
                ckfinder: {
                    uploadUrl: "{{ route('admin.ckeditor.upload') }}?_token={{ csrf_token() }}"
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        function previewImage(event) {
            const preview = document.getElementById('imagePreview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = `
                <div class="card">
                    <div class="card-body p-2">
                        <p class="text-muted mb-2 small">Xem trước:</p>
                        <img src="${e.target.result}" class="img-fluid rounded" style="max-height: 300px;">
                    </div>
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
