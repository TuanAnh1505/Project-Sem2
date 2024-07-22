<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }

    public function registration(): View
    {
        return view('auth.registration');
    }

    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                             ->withSuccess('You have Successfully logged in');
        }

        return redirect("auth/login")->withError('Oops! You have entered invalid credentials');
    }

    // public function postRegistration(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6',
    //     ]);

    //     $data = $request->all();
    //     $user = $this->create($data);

    //     Auth::login($user);

    //     // Send welcome email
    //     Mail::to($user->email)->send(new WelcomeMail($user));

    //     return redirect("/")->withSuccess('Great! You have Successfully logged in');
    // }
    public function postRegistration(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed', // Add |confirmed here
        ]);

        $data = $request->all();
        $user = $this->create($data);

        Auth::login($user);

        // Send welcome email
        Mail::to($user->email)->send(new WelcomeMail($user));

        return redirect("/")->withSuccess('Great! You have Successfully logged in');
    }

    public function home(): View
    {
        if (Auth::check()) {
            return view('home');
        }

        return redirect("auth/login")->withError('Oops! You do not have access');
    }

    public function create(array $data): User
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();

        return redirect('/');
    }
}
