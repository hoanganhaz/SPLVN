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
            background: #007bff;
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
        .info-row {
            margin: 15px 0;
            padding: 10px;
            background: #f8f9fa;
            border-left: 3px solid #007bff;
        }
        .label {
            font-weight: bold;
            color: #007bff;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>🔔 Thông Báo Liên Hệ Mới</h2>
        </div>
        
        <div class="content">
            <p>Bạn có một liên hệ mới từ website:</p>
            
            <div class="info-row">
                <span class="label">👤 Họ tên:</span> {{ $contact->name }}
            </div>
            
            <div class="info-row">
                <span class="label">📱 Số điện thoại:</span> {{ $contact->phone }}
            </div>
            
            @if($contact->email)
            <div class="info-row">
                <span class="label">✉️ Email:</span> {{ $contact->email }}
            </div>
            @endif
            
            @if($contact->address)
            <div class="info-row">
                <span class="label">📍 Địa chỉ:</span> {{ $contact->address }}
            </div>
            @endif
            
            @if($contact->message)
            <div class="info-row">
                <span class="label">💬 Nội dung:</span><br>
                {{ $contact->message }}
            </div>
            @endif
            
            <div class="info-row">
                <span class="label">🕐 Thời gian:</span> {{ $contact->created_at->format('d/m/Y H:i') }}
            </div>
        </div>
        
        <div class="footer">
            <p>Email này được gửi tự động từ hệ thống</p>
        </div>
    </div>
</body>
</html>     