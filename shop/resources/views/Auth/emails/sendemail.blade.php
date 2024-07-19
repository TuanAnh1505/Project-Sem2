<!DOCTYPE html>
<html>
<head>
    <title>Welcome to {{ config('app.name') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            text-align: center;
        }
        .content h1 {
            color: #333333;
        }
        .content p {
            color: #555555;
            line-height: 1.6;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #f2931f;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <img src="{{ asset('images/hidu 1.png') }}" alt="{{ config('app.name') }} Logo">
        </div>
        <div class="content">
            <h1>Welcome, {{ $name }}!</h1>
            <p>Thank you for registering at our site. We are excited to have you join our community.</p>
            <p>To get started, please visit your dashboard by clicking the button below:</p>
            <a href="{{ url('/dashboard') }}" class="btn">Go to Dashboard</a>
            <p>If you have any questions, feel free to reply to this email or contact our support team.</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <p>{{ config('app.name') }}, 123 Your Street, Your City, Your Country</p>
        </div>
    </div>
</body>
</html>
