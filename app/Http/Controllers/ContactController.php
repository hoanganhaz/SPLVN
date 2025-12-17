<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\AdminContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\UserContactMail;
use App\Models\Contract;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('client.contact');
    }

    // Xử lý submit form
    public function store(Request $request)
    {
        // Validate trong controller
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address' => 'nullable|string|max:500',
            'email' => 'nullable|email|max:255',
            'message' => 'nullable|string|max:2000',
        ], [
            'name.required' => 'Vui lòng nhập họ tên',
            'name.max' => 'Họ tên không được quá 255 ký tự',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.regex' => 'Số điện thoại không hợp lệ',
            'phone.min' => 'Số điện thoại phải có ít nhất 10 số',
            'email.email' => 'Email không đúng định dạng',
            'email.max' => 'Email không được quá 255 ký tự',
            'address.max' => 'Địa chỉ không được quá 500 ký tự',
            'message.max' => 'Tin nhắn không được quá 2000 ký tự',
        ]);

        try {
            // Lưu thông tin liên hệ vào database
           
            $contact = Contract::create($validated);
           
            // Log created contact id for debugging

            Log::info('Contact created', ['id' => $contact->id ?? null, 'data' => $validated]);

            // Gửi email cho admin
            $adminEmail = config('mail.admin_email', env('MAIL_ADMIN_EMAIL', 'hoangannculi92@gmail.com'));
            Mail::to($adminEmail)->send(new AdminContactMail($contact));

            // Gửi email cảm ơn cho người dùng (nếu có email)
            if ($contact->email) {
                Mail::to($contact->email)->send(new UserContactMail($contact));
            }

            return redirect()->back()->with('success', 'Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất.');
        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra. Vui lòng thử lại sau!')
                ->withInput();
        }
    }
}
