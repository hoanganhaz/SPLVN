<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Hiển thị danh sách liên hệ
     */
    public function index(Request $request)
    {
        $query = Contract::query();

        // Lọc theo trạng thái
        if ($request->has('status') && $request->status !== '') {
            $query->where('status', $request->status);
        }

        // Tìm kiếm
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        $contracts = $query->latest()->paginate(15);

        return view('admin.contracts.index', compact('contracts'));
    }

    /**
     * Hiển thị chi tiết liên hệ
     */
    public function show(Contract $contract)
    {
        return view('admin.contracts.show', compact('contract'));
    }

    /**
     * Xóa liên hệ
     */
    public function destroy(Contract $contract)
    {
        $contract->delete();

        return redirect()->route('admin.contracts.index')
            ->with('success', 'Liên hệ đã được xóa thành công!');
    }

    /**
     * Cập nhật trạng thái nhanh
     */
    public function updateStatus(Request $request, Contract $contract)
    {
        $validated = $request->validate([
            'status' => 'required|in:0,1,2'
        ]);

        $contract->update(['status' => $validated['status']]);

        return response()->json([
            'success' => true,
            'message' => 'Cập nhật trạng thái thành công!'
        ]);
    }
}
