@extends('admin.layout')
@section('title')
    Thêm sản phẩm
@endsection
@section('body')

<style>
    .form-section-title {
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 18px;
        border-left: 4px solid #0d6efd;
        padding-left: 10px;
        color: #0d6efd;
    }
    .form-control-lg, .form-select {
        height: 48px !important;
        border-radius: 10px;
    }
    input[type="number"], input[type="text"], select, textarea {
        border-radius: 10px !important;
        padding: 10px 14px !important;
        font-size: 15px !important;
    }
    .card {
        border-radius: 14px !important;
    }
    textarea {
        border-radius: 12px !important;
        font-size: 15px;
    }
    .price-input {
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 1px;
    }
    .price-input:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 3px rgba(13, 110, 253, .2);
    }
</style>

<div class="container mt-4 mb-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-primary mb-0">
            <i class="bi bi-box-seam"></i> Thêm sản phẩm mới
        </h3>

        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">
            ← Quay lại
        </a>
    </div>

    {{-- HIỂN THỊ LỖI --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Lỗi!</strong><br>
            @foreach($errors->all() as $err)
                • {{ $err }} <br>
            @endforeach
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row g-4">

            {{-- KHỐI 1 --}}
            <div class="col-md-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">

                        <h6 class="form-section-title">Thông tin sản phẩm</h6>

                        <div class="mb-3">
                            <label class="form-label">Tên sản phẩm</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control form-control-lg"
                                placeholder="Nhập tên sản phẩm..." required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mã sản phẩm</label>
                            <input type="text" name="code" value="{{ old('code') }}"
                                class="form-control form-control-lg"
                                placeholder="Nhập mã sản phẩm..." required>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-3">
                                <label class="form-label">Giá</label>
                                <input type="number" name="price" id="price" value="{{ old('price') }}"
                                    class="form-control price-input" placeholder="VD: 1.200.000">
                            </div>

                            <div class="col-6 mb-3">
                                <label class="form-label text-success">Giá khuyến mãi</label>
                                <input type="number" name="sale_price" id="sale_price"
                                    value="{{ old('sale_price') }}"
                                    class="form-control border-success"
                                    placeholder="VD: 950.000">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">Danh mục</label>

                            @php
                                function renderCategoryOptionSelected($category, $level = 0) {
                                    echo '<option value="'.$category->id.'" ' . 
                                        (old('category_id') == $category->id ? 'selected' : '') . '>'
                                        . str_repeat('-- ', $level)
                                        . $category->name .
                                    '</option>';

                                    foreach ($category->children as $child) {
                                        renderCategoryOptionSelected($child, $level + 1);
                                    }
                                }
                            @endphp

                            <select name="category_id" class="form-select form-control-lg">
                                @foreach($categories as $cat)
                                    @if(!$cat->parent_id)
                                        @php
                                            renderCategoryOptionSelected($cat);
                                        @endphp
                                    @endif
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
            </div>

            {{-- KHỐI 2 --}}
            <div class="col-md-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">

                        <h6 class="form-section-title">Hình ảnh & trạng thái</h6>

                        <div class="mb-3">
                            <label class="form-label">Ảnh sản phẩm</label>
                            <input type="file" name="image" class="form-control">
                            <small class="text-muted">Chọn 1 ảnh minh họa sản phẩm</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Trạng thái</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Hoạt động</option>
                                <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Ẩn</option>
                            </select>
                        </div>

                        <hr>

                        <h6 class="form-section-title">Kích thước</h6>

                        <div class="row">
                            <div class="col-6 mb-3">
                                <label class="form-label">Chiều dài</label>
                                <input type="text" name="length" value="{{ old('length') }}" class="form-control">
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label">Chiều rộng</label>
                                <input type="text" name="width" value="{{ old('width') }}" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- KHỐI 3 --}}
            <div class="col-md-12 mt-2">
                <div class="card shadow-sm border-0">
                    <div class="card-body">

                        <h6 class="form-section-title">Thông số kỹ thuật</h6>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Cánh / Mí</label>
                                <input type="text" name="wing_eyelids" value="{{ old('wing_eyelids') }}" class="form-control">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Công nghệ sơn</label>
                                <input type="text" name="paint_technology" value="{{ old('paint_technology') }}" class="form-control">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Khóa</label>
                                <input type="text" name="key" value="{{ old('key') }}" class="form-control">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Bản lề</label>
                                <input type="text" name="hinge" value="{{ old('hinge') }}" class="form-control">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Thiết kế</label>
                                <input type="text" name="design" value="{{ old('design') }}" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- KHỐI 4 --}}
            <div class="col-md-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">

                        <h6 class="form-section-title">Mô tả chi tiết</h6>

                        <textarea name="description" id="description" class="form-control"
                            style="min-height: 200px">{{ old('description') }}</textarea>

                    </div>
                </div>
            </div>

        </div>

        <div class="text-end mt-4">
            <button class="btn btn-primary btn-lg px-5 fw-semibold">
                <i class="bi bi-check-circle"></i> Lưu sản phẩm
            </button>
        </div>

    </form>

</div>

@endsection

@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#description'), {
            ckfinder: {
                uploadUrl: "{{ route('admin.ckeditor.upload') }}?_token={{ csrf_token() }}"
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>



@endsection
