<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
Route::get('/login', [AuthController::class, 'loginRender'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::get('/register', [AuthController::class, 'registerRender'])->name('register');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Admin routes.
|
*/

Route::middleware(['auth'])->group(function () {

    Route::get('account', [AuthController::class, 'account'])->name('account');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::name('admin.')->prefix('admin')->group(function(){
		Route::get('/', [AdminController::class, 'index'])->name('index');

	});

});

