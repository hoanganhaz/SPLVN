@extends('admin.layout')

@section('title')
    Chi tiết sản phẩm
@endsection

@section('body')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h3>Chi tiết sản phẩm</h3>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
            Quay lại
        </a>
    </div>

    <table class="table table-bordered">
        <tr>
            <th width="200">Trạng thái</th>
            <td>
                @if($product->status)
                    <span class="badge bg-success">Hoạt động</span>
                @else
                    <span class="badge bg-secondary">Ẩn</span>
                @endif
            </td>
        </tr>

        <tr>
            <th>Danh mục</th>
            <td>{{ $product->category->name ?? '—' }}</td>
        </tr>

        <tr>
            <th>Giá</th>
            <td>{{ number_format($product->price) }} đ</td>
        </tr>

        <tr>
            <th>Giá khuyến mãi</th>
            <td>{{ number_format($product->sale_price) }} đ</td>
        </tr>

        <tr>
            <th>Kích thước</th>
            <td>{{ $product->length }} x {{ $product->width }}</td>
        </tr>

        <tr>
            <th>Cánh / Mí</th>
            <td>{{ $product->wing_eyelids }}</td>
        </tr>

        <tr>
            <th>Công nghệ sơn</th>
            <td>{{ $product->paint_technology }}</td>
        </tr>

        <tr>
            <th>Khóa</th>
            <td>{{ $product->key }}</td>
        </tr>

        <tr>
            <th>Bản lề</th>
            <td>{{ $product->hinge }}</td>
        </tr>

        <tr>
            <th>Thiết kế</th>
            <td>{{ $product->design }}</td>
        </tr>

        <tr>
            <th>Mô tả</th>
            <td>
                {!! $product->description !!}
            </td>
        </tr>
    </table>
</div>
@endsection
