@extends('admin.layout')

@section('title', 'Danh sách sản phẩm')

@section('body')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Danh sách sản phẩm</h3>
        <a href="{{ route('admin.products.create') }}" class="btn btn-success">
            + Thêm sản phẩm
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th width="50">#</th>
                <th width="100">Ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Giá</th>
                <th>Giá KM</th>
                <th>Kích thước</th>
                <th>Trạng thái</th>
                <th width="160">Hành động</th>
            </tr>
        </thead>

        <tbody>
            @forelse($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>

                    <td>
                        @if($product->image)
                            <img src="{{ Storage::url($product->image) }}"
                                 width="80" height="80"
                                 style="object-fit:cover; border-radius:6px;">
                        @else
                            <img src="{{ asset('no-image.png') }}"
                                 width="80" height="80"
                                 style="object-fit:cover; opacity:0.4;">
                        @endif
                    </td>

                    <td>{{ $product->name }}</td>

                    <td>{{ $product->category->name ?? '—' }}</td>

                    <td>{{ number_format($product->price) }} đ</td>

                    <td>
                        @if($product->sale_price)
                            {{ number_format($product->sale_price) }} đ
                        @else
                            —
                        @endif
                    </td>

                    <td>{{ $product->length }} x {{ $product->width }}</td>

                    <td>
                        @if($product->status)
                            <span class="badge bg-success">Hoạt động</span>
                        @else
                            <span class="badge bg-secondary">Ẩn</span>
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('admin.products.show', $product->id) }}"
                           class="btn btn-sm btn-success">
                            Chi tiết
                        </a>

                        <a href="{{ route('admin.products.edit', $product->id) }}"
                           class="btn btn-sm btn-warning">
                            Sửa
                        </a>

                        <form action="{{ route('admin.products.destroy', $product->id) }}"
                              method="POST"
                              style="display:inline-block;"
                              onsubmit="return confirm('Bạn chắc chắn muốn xóa?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">
                                Xóa
                            </button>
                        </form>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="9" class="text-center py-3">
                        Không có sản phẩm nào
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
