@extends('admin.layout')
@section('title', 'Hiển thị danh mục')
@section('body')

<h2>Chi tiết</h2>

<p><strong>Tên:</strong> {{ $category->name }}</p>

<p>
    <strong>Danh mục cha:</strong> 
    {{ $category->parent?->name ?? 'None' }}
</p>

<a href="{{ route('admin.categories.index') }}">Quay lại</a>

@endsection
