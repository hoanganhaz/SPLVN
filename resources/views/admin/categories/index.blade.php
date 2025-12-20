@extends('admin.layout')
@section('title', 'Danh sách danh mục')
@section('body')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Danh sách danh mục</h2>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
            + Thêm danh mục
        </a>
    </div>

    @php
        function renderCategoryRow($category, $level = 0) {
            echo '<tr>';
                echo '<td>'. str_repeat('-- ', $level) . $category->name .'</td>';

                if ($category->parent) {
                    echo '<td><span class="badge bg-info">' . $category->parent->name . '</span></td>';
                } else {
                    echo '<td><span class="badge bg-secondary">Không có</span></td>';
                }

                echo '<td>
                        <a href="'. route('admin.categories.edit', $category->id) .'" class="btn btn-sm btn-warning">✏️ Sửa</a>
                        <form action="'. route('admin.categories.destroy', $category->id) .'" method="POST" style="display:inline-block" onsubmit="return confirm(\'Bạn chắc chắn muốn xóa?\')">
                            '. csrf_field() .'
                            '. method_field("DELETE") .'
                            <button class="btn btn-sm btn-danger">🗑️ Xóa</button>
                        </form>
                      </td>';
            echo '</tr>';

            foreach ($category->children as $child) {
                renderCategoryRow($child, $level + 1);
            }
        }
    @endphp

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Tên</th>
                        <th>Danh mục cha</th>
                        <th width="180">Hành động</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $cat)
                        @if (!$cat->parent_id)
                            @php renderCategoryRow($cat); @endphp
                        @endif
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>

@endsection
