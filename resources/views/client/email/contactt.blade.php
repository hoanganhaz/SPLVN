<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #f9f9f9;
        }
        .header {
            background: #28a745;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background: white;
            padding: 30px;
            border-radius: 0 0 5px 5px;
        }
        .info-box {
            margin: 20px 0;
            padding: 15px;
            background: #e8f5e9;
            border-left: 4px solid #28a745;
            border-radius: 3px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 12px;
        }
        .button {
            display: inline-block;
            padding: 12px 30px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>✅ Cảm Ơn Bạn Đã Liên Hệ!</h2>
        </div>
        
        <div class="content">
            <p>Xin chào <strong>{{ $contact->name }}</strong>,</p>
            
            <p>Chúng tôi đã nhận được thông tin liên hệ của bạn và sẽ phản hồi trong thời gian sớm nhất.</p>
            
            <div class="info-box">
                <h3 style="margin-top:0">📋 Thông tin bạn đã gửi:</h3>
                <p><strong>Họ tên:</strong> {{ $contact->name }}</p>
                <p><strong>Số điện thoại:</strong> {{ $contact->phone }}</p>
                @if($contact->email)
                <p><strong>Email:</strong> {{ $contact->email }}</p>
                @endif
                @if($contact->address)
                <p><strong>Địa chỉ:</strong> {{ $contact->address }}</p>
                @endif
                @if($contact->message)
                <p><strong>Nội dung:</strong><br>{{ $contact->message }}</p>
                @endif
            </div>
            
            <p>Nếu bạn cần hỗ trợ gấp, vui lòng liên hệ:</p>
            <ul>
                <li>📞 Hotline: <strong>1900 xxxx</strong></li>
                <li>✉️ Email: <strong>support@example.com</strong></li>
            </ul>
            
            <p>Trân trọng,<br><strong>Đội ngũ hỗ trợ</strong></p>
        </div>
        
        <div class="footer">
            <p>Email này được gửi tự động, vui lòng không phản hồi lại email này.</p>
            <p>&copy; {{ date('Y') }} Company Name. All rights reserved.</p>
        </div>
    </div>
</body>
</html>