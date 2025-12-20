@extends('admin.layout')
@section('title', 'Thêm danh mục')
@section('body')

<div class="container mt-4" style="max-width: 600px">

    <h2 class="mb-4">Thêm danh mục</h2>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Tên danh mục</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục..." required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Danh mục cha</label>
                    <select name="parent_id" class="form-select">
                        <option value="">Không có</option>
                        @foreach($parents as $p)
                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
                        ← Quay lại
                    </a>

                    <button class="btn btn-primary">
                         Thêm danh mục
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection
