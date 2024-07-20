<!DOCTYPE html>
<html>
<head>
    <title>Hidu House</title>
    <style>
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .email-header h2 {
            font-size: 15px;
        }
        .email-header, .email-footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .email-content {
            text-align: center;
        }

        .email-content a {
            display: inline-block;
            margin-top: 20px; 
            background-color: #f2931f;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .email-footer a {
            display: inline-block;
            word-wrap: break-word;
            word-break: break-all;
        }
        @media (max-width: 600px) {
            .email-footer a {
                font-size: 14px;
            }
        }
        @media (min-width: 601px) {
            .email-footer a {
                font-size: 16px;
            }
        }
    </style>
    
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="{{ asset('template/images/hidu 1.png') }}" alt="Hidu House Logo" width="250">
            <h2>Password Reset Request</h2>
        </div>
        <div class="email-content">
            <p>Dear User,</p>
            <p>You are receiving this email because we received a password reset request for your account. Click the button below to reset your password:</p>
            <p><a href="{{ $link }}" class="btn btn-primary">Reset Password</a></p>
            <p>If you did not request a password reset, no further action is required.</p>
        </div>
        <div class="email-footer">
            <p><small>If you’re having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser:</small></p>
            <p><a href="{{ $link }}">{{ $link }}</a></p>
        </div>
    </div>
</body>
</html>
