<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('index');
    }

    public function loginRender(): View
    {
        return view('login');
    }
}
