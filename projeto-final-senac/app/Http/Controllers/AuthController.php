<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AuthController extends Controller
{
    public function loginRender(): View
    {
        return view('login');
    }

    public function registerRender(): View
    {
        return view('register');
    }

    public function account(): View
    {
        return view('account');
    }

    public function accountData(): View
    {
        return view('account-data');
    }

    public function thanks()
    {
        return redirect()->route('home')->with('status', 'Obrigado por se cadastrar.');
    }

    public function authenticate(Request $request)
    {
        // print_r($request->input('email'));
        // print_r($request->input('password'));
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'E-mail ou senha incorreto',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
