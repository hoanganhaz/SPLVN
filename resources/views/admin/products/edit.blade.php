@extends('admin.layout')
@section('title')
    Sửa sản phẩm
@endsection
@section('body')
<div class="container">
    <h3 class="mb-4">Cập nhật sản phẩm</h3>

    <form action="{{ route('products.update', $product->id) }}"
        method="POST"
        enctype="multipart/form-data">
  @csrf
  @method('PUT')
  
  <div class="row">
      <div class="col-md-6 mb-3">
          <label>Tên sản phẩm</label>
          <input type="text" name="name" class="form-control"
                 value="{{ old('name', $product->name) }}">
      </div>
  
      <div class="col-md-6 mb-3">
          <label>Mã sản phẩm</label>
          <input type="text" name="code" class="form-control"
                 value="{{ old('code', $product->code) }}">
      </div>
  </div>
  
  <div class="mb-3">
      <label>Ảnh</label>
      <input type="file" name="image" class="form-control">
      @if($product->image)
          <img src="{{ asset('storage/'.$product->image) }}" width="120" class="mt-2">
      @endif
  </div>
  
  <div class="row">
      <div class="col-md-4 mb-3">
          <label>Trạng thái</label>
          <select name="status" class="form-control">
              <option value="1" {{ $product->status ? 'selected' : '' }}>Hoạt động</option>
              <option value="0" {{ !$product->status ? 'selected' : '' }}>Ẩn</option>
          </select>
      </div>
  
      <div class="col-md-4 mb-3">
          <label>Giá</label>
          <input type="number" step="0.01" name="price"
                 value="{{ old('price', $product->price) }}"
                 class="form-control">
      </div>
  
      <div class="col-md-4 mb-3">
          <label>Giá khuyến mãi</label>
          <input type="number" step="0.01" name="sale_price"
                 value="{{ old('sale_price', $product->sale_price) }}"
                 class="form-control">
      </div>
  </div>
  
  <div class="row">
      <div class="col-md-6 mb-3">
          <label>Chiều dài</label>
          <input type="text" name="length"
                 value="{{ old('length', $product->length) }}"
                 class="form-control">
      </div>
  
      <div class="col-md-6 mb-3">
          <label>Chiều rộng</label>
          <input type="text" name="width"
                 value="{{ old('width', $product->width) }}"
                 class="form-control">
      </div>
  </div>
  
  <div class="row">
      <div class="col-md-4 mb-3">
          <label>Cánh / Mí</label>
          <input type="text" name="wing_eyelids"
                 value="{{ old('wing_eyelids', $product->wing_eyelids) }}"
                 class="form-control">
      </div>
  
      <div class="col-md-4 mb-3">
          <label>Công nghệ sơn</label>
          <input type="text" name="paint_technology"
                 value="{{ old('paint_technology', $product->paint_technology) }}"
                 class="form-control">
      </div>
  
      <div class="col-md-4 mb-3">
          <label>Thiết kế</label>
          <input type="text" name="design"
                 value="{{ old('design', $product->design) }}"
                 class="form-control">
      </div>
  </div>
  
  <div class="row">
      <div class="col-md-6 mb-3">
          <label>Khóa</label>
          <input type="text" name="key"
                 value="{{ old('key', $product->key) }}"
                 class="form-control">
      </div>
  
      <div class="col-md-6 mb-3">
          <label>Bản lề</label>
          <input type="text" name="hinge"
                 value="{{ old('hinge', $product->hinge) }}"
                 class="form-control">
      </div>
  </div>
  
  <div class="mb-3">
      <label>Mô tả</label>
      <textarea name="description" id="description"
                class="form-control"
                rows="6">{{ old('description', $product->description) }}</textarea>
  </div>
  
  <div class="mb-3">
      <label>Danh mục</label>
      <select name="category_id" class="form-control">
          @foreach($categories as $cat)
              <option value="{{ $cat->id }}"
                  {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                  {{ $cat->name }}
              </option>
          @endforeach
      </select>
  </div>
  
  <div class="text-end">
      <button class="btn btn-primary">Cập nhật</button>
      <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
  </div>
  
  </form>
  
</div>
@endsection
