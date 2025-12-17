@extends('admin.layout')
@section('title')
    Thêm sản phẩm
@endsection
@section('body')
    <div class="container">
        <h3 class="mb-4">Thêm sản phẩm</h3>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label>Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label>Mã sản phẩm</label>
                <input type="text" name="code" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label>Ảnh</label>
                <input type="file" name="image" class="form-control">
            </div>
            
            <div class="mb-3">
                <label>Trạng thái</label>
                <select name="status" class="form-control">
                    <option value="1">Hoạt động</option>
                    <option value="0">Ẩn</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label>Giá</label>
                <input type="number" step="0.01" name="price" class="form-control">
            </div>
            
            <div class="mb-3">
                <label>Giá khuyến mãi</label>
                <input type="number" step="0.01" name="sale_price" class="form-control">
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Chiều dài</label>
                    <input type="text" name="length" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Chiều rộng</label>
                    <input type="text" name="width" class="form-control">
                </div>
            </div>
            
            <div class="mb-3">
                <label>Cánh / Mí</label>
                <input type="text" name="wing_eyelids" class="form-control">
            </div>
            
            <div class="mb-3">
                <label>Công nghệ sơn</label>
                <input type="text" name="paint_technology" class="form-control">
            </div>
            
            <div class="mb-3">
                <label>Khóa</label>
                <input type="text" name="key" class="form-control">
            </div>
            
            <div class="mb-3">
                <label>Bản lề</label>
                <input type="text" name="hinge" class="form-control">
            </div>
            
            <div class="mb-3">
                <label>Thiết kế</label>
                <input type="text" name="design" class="form-control">
            </div>
            
            <div class="mb-3">
                <label>Mô tả</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            
            <div class="mb-3">
                <label>Danh mục</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <button class="btn btn-primary">Lưu</button>
            </form>
            
    </div>
@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload') }}?_token={{ csrf_token() }}"
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
