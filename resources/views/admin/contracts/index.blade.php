@extends('admin.layout')

@section('title', 'Quản lý Liên Hệ')

@section('header')
<div class="mb-4">
    <h2><i class="fas fa-envelope"></i> Quản Lý Liên Hệ</h2>
</div>
@endsection

@section('body')

<!-- Bộ lọc và tìm kiếm -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <form action="{{ route('admin.contracts.index') }}" method="GET" class="row g-3">
            <div class="col-md-4">
                <label class="form-label">Tìm kiếm</label>
                <input type="text" 
                       name="search" 
                       class="form-control" 
                       placeholder="Tên, email, số điện thoại..."
                       value="{{ request('search') }}">
            </div>
            <div class="col-md-3">
                <label class="form-label">Trạng thái</label>
                <select name="status" class="form-select">
                    <option value="">Tất cả</option>
                    <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Mới</option>
                    <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Đang xử lý</option>
                    <option value="2" {{ request('status') === '2' ? 'selected' : '' }}>Hoàn thành</option>
                </select>
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <button type="submit" class="btn btn-primary me-2">
                    <i class="fas fa-search"></i> Lọc
                </button>
                <a href="{{ route('admin.contracts.index') }}" class="btn btn-secondary">
                    <i class="fas fa-redo"></i>
                </a>
            </div>
        </form>
    </div>
</div>

<!-- Danh sách -->
<div class="card shadow-sm">
    <div class="card-body">
        @if($contracts->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th width="50">#</th>
                            <th>Tên</th>
                            <th>Liên hệ</th>
                            <th>Nội dung</th>
                            <th width="120">Trạng thái</th>
                            <th width="120">Ngày tạo</th>
                            <th width="180" class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contracts as $contract)
                            <tr>
                                <td>{{ $contract->id }}</td>
                                <td>
                                    <strong>{{ $contract->name }}</strong>
                                    @if($contract->address)
                                        <br><small class="text-muted">{{ $contract->address }}</small>
                                    @endif
                                </td>
                                <td>
                                    <i class="fas fa-phone text-primary"></i> {{ $contract->phone }}
                                    @if($contract->email)
                                        <br><i class="fas fa-envelope text-info"></i> {{ $contract->email }}
                                    @endif
                                </td>
                                <td>{{ Str::limit($contract->message, 60) }}</td>
                                <td>
                                    <select class="form-select form-select-sm status-select" 
                                            data-id="{{ $contract->id }}"
                                            onchange="updateStatus({{ $contract->id }}, this.value)">
                                        <option value="0" {{ $contract->status == 0 ? 'selected' : '' }}>Mới</option>
                                        <option value="1" {{ $contract->status == 1 ? 'selected' : '' }}>Đang xử lý</option>
                                        <option value="2" {{ $contract->status == 2 ? 'selected' : '' }}>Hoàn thành</option>
                                    </select>
                                </td>
                                <td>
                                    {{ $contract->created_at->format('d/m/Y') }}
                                    <br>
                                    <small class="text-muted">{{ $contract->created_at->format('H:i') }}</small>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="{{ route('admin.contracts.show', $contract) }}" 
                                           class="btn btn-info text-white" 
                                           title="Xem chi tiết">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <button type="button"
                                                class="btn btn-danger" 
                                                title="Xóa"
                                                onclick="deleteContract({{ $contract->id }})">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                    
                                    <form id="delete-form-{{ $contract->id }}" 
                                          action="{{ route('admin.contracts.destroy', $contract) }}" 
                                          method="POST" 
                                          style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $contracts->appends(request()->query())->links() }}
            </div>
        @else
            <div class="alert alert-info text-center mb-0">
                <i class="fas fa-info-circle fa-2x mb-3"></i>
                <h5>Chưa có liên hệ nào</h5>
                <p class="mb-0">Danh sách liên hệ từ khách hàng sẽ hiển thị ở đây.</p>
            </div>
        @endif
    </div>
</div>
@endsection

@section('script')
<script>
function deleteContract(id) {
    if (confirm('Bạn có chắc chắn muốn xóa liên hệ này?')) {
        document.getElementById('delete-form-' + id).submit();
    }
}

function updateStatus(id, status) {
    fetch(`/admin/contracts/${id}/status`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ status: status })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Hiển thị thông báo thành công
            const alert = document.createElement('div');
            alert.className = 'alert alert-success alert-dismissible fade show';
            alert.innerHTML = `
                <i class="fas fa-check-circle"></i> ${data.message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            const container = document.querySelector('.content .container-fluid') || document.querySelector('.content-wrapper .container-fluid') || document.querySelector('.container-fluid');
            if (container) {
                container.insertBefore(alert, container.firstChild);
            } else {
                document.body.prepend(alert);
            }

            setTimeout(() => alert.remove(), 3000);
        }
    })
    .catch(error => {
        alert('Thay đổi trạng thái thành công');
        console.error('Error:', error);
    });
}
</script>
@endsection