@extends('admin.layout')

@section('title', 'Chi tiết Liên Hệ')

@section('header')
    <div class="mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2><i class="fas fa-eye"></i> Chi Tiết Liên Hệ</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.contracts.index') }}">Liên hệ</a></li>
                        <li class="breadcrumb-item active">Chi tiết</li>
                    </ol>
                </nav>
            </div>
            <div>
                <button type="button" class="btn btn-danger" onclick="deleteContract()">
                    <i class="fas fa-trash"></i> Xóa
                </button>
                <form id="delete-form" action="{{ route('admin.contracts.destroy', $contract) }}" method="POST"
                    style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>

@endsection

@section('body')

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0"><i class="fas fa-user"></i> Thông Tin Khách Hàng</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="text-muted small">Họ và tên</label>
                            <h5>{{ $contract->name }}</h5>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted small">Số điện thoại</label>
                            <h5><i class="fas fa-phone text-primary"></i> {{ $contract->phone }}</h5>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="text-muted small">Email</label>
                            <h6>
                                @if ($contract->email)
                                    <i class="fas fa-envelope text-info"></i> {{ $contract->email }}
                                @else
                                    <span class="text-muted">Không có</span>
                                @endif
                            </h6>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted small">Trạng thái</label>
                            <br>
                            <select class="form-select form-select-sm d-inline-block w-auto"
                                onchange="updateStatus({{ $contract->id }}, this.value)">
                                <option value="0" {{ $contract->status == 0 ? 'selected' : '' }}>Mới</option>
                                <option value="1" {{ $contract->status == 1 ? 'selected' : '' }}>Đang xử lý</option>
                                <option value="2" {{ $contract->status == 2 ? 'selected' : '' }}>Hoàn thành</option>
                            </select>
                        </div>
                    </div>

                    @if ($contract->address)
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="text-muted small">Địa chỉ</label>
                                <p><i class="fas fa-map-marker-alt text-danger"></i> {{ $contract->address }}</p>
                            </div>
                        </div>
                    @endif

                    <hr>

                    <div class="mb-3">
                        <label class="text-muted small">Nội dung liên hệ</label>
                        <div class="card bg-light">
                            <div class="card-body">
                                <p class="mb-0" style="white-space: pre-wrap;">{{ $contract->message }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm mb-3">
                <div class="card-header bg-secondary text-white">
                    <h6 class="mb-0"><i class="fas fa-info-circle"></i> Thông tin chi tiết</h6>
                </div>
                <div class="card-body">
                    <table class="table table-sm mb-0">
                        <tr>
                            <td class="text-muted">ID:</td>
                            <td><strong>#{{ $contract->id }}</strong></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Trạng thái:</td>
                            <td>
                                @if ($contract->status == 0)
                                    <span class="badge bg-primary">Mới</span>
                                @elseif($contract->status == 1)
                                    <span class="badge bg-warning">Đang xử lý</span>
                                @else
                                    <span class="badge bg-success">Hoàn thành</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">Ngày tạo:</td>
                            <td>
                                {{ $contract->created_at->format('d/m/Y') }}
                                <br>
                                <small class="text-muted">{{ $contract->created_at->format('H:i:s') }}</small>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">Cập nhật:</td>
                            <td>
                                {{ $contract->updated_at->format('d/m/Y') }}
                                <br>
                                <small class="text-muted">{{ $contract->updated_at->format('H:i:s') }}</small>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h6 class="mb-0"><i class="fas fa-cog"></i> Thao Tác</h6>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.contracts.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Quay lại danh sách
                        </a>
                        @if ($contract->email)
                            <a href="mailto:{{ $contract->email }}" class="btn btn-info">
                                <i class="fas fa-envelope"></i> Gửi Email
                            </a>
                        @endif
                        <a href="tel:{{ $contract->phone }}" class="btn btn-primary">
                            <i class="fas fa-phone"></i> Gọi điện
                        </a>
                        <button type="button" class="btn btn-danger" onclick="deleteContract()">
                            <i class="fas fa-trash"></i> Xóa liên hệ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function deleteContract() {
            if (confirm('Bạn có chắc chắn muốn xóa liên hệ này?\n\nHành động này không thể hoàn tác!')) {
                document.getElementById('delete-form').submit();
            }
        }

        function updateStatus(id, status) {
            const tokenMeta = document.querySelector('meta[name="csrf-token"]');
            const token = tokenMeta ? tokenMeta.getAttribute('content') : null;

            fetch(`/admin/contracts/${id}/status`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': token
                    },
                    body: JSON.stringify({
                        status: status
                    })
                })
                .then(response => response.ok ? response.json() : Promise.reject(response))
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
                    alert('Thay đổi trạng thái thành công.');
                    console.error('Error:', error);
                });
        }
    </script>
@endsection
