<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;

class PasswordResetController extends Controller
{
    // Hiển thị form nhập email để yêu cầu reset password
    public function showResetForm()
    {
        return view('auth.passwords.email');
    }

    // Gửi email chứa link reset password
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        // Tạo token ngẫu nhiên
        $token = Str::random(60);

        // Lưu token vào database
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        // Tạo link reset password
        $link = url('auth/password/reset/'.$token.'?email='.$request->email);

        // Gửi email reset password
        Mail::send('auth.passwords.reset_email', ['link' => $link], function($message) use ($request) {
            $message->to($request->email);
            $message->subject('Password Reset Request');
        });

        return back()->with('status', 'We have emailed your password reset link!');
    }

    // Hiển thị form reset password với token
    public function showResetPasswordForm($token)
    {
        return view('auth.passwords.reset', ['token' => $token]);
    }

    // Xử lý reset password
    public function resetPassword(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required',
        ]);

        // Kiểm tra token và email có tồn tại trong database không
        $passwordReset = DB::table('password_reset_tokens')->where([
            ['token', $request->token],
            ['email', $request->email],
        ])->first();

        if (!$passwordReset) {
            return back()->withErrors(['email' => 'Invalid token!']);
        }

        // Lấy thông tin người dùng
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'User not found!']);
        }

        // Cập nhật mật khẩu mới
        $user->password = bcrypt($request->password);
        $user->save();

        // Xóa token sau khi reset thành công
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        // Điều hướng người dùng đến trang đăng nhập
        return redirect('/')->with('status', 'Your password has been reset!');
    }
}
