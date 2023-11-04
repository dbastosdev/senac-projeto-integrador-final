<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Site routes.
|
*/

Route::get('/', [SiteController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Admin routes.
|
*/

Route::middleware(['authCas'])->group(function () {

	Route::get('login', [LoginController::class, 'login'])->name('login');
	Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::name('admin.')->prefix('admin')->group(function(){
		Route::get('/', [AdminController::class, 'index'])->name('index');

	});

});

