<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use \Illuminate\Support\Facades\Auth;
use phpCAS;

class LoginController extends Controller
{


    /**
     * Summary of login
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(): RedirectResponse
    {
        session()->flash('status', 'Bem vindo!');

        return redirect(route('admin.index'));
    }

    /**
     * Summary of logout
     * @return void
     */
    public function logout(): Void
    {
        Auth::logout();
        session()->flush();
        session()->save();

        phpCAS::logout(['service' => getenv('APP_URL')]);
    }
}
