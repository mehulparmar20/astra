<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });




Auth::routes();

Route::get('admin/dashboard', [AuthController::class, 'dashboard']);
Route::get('admin/user', [UserController::class, 'getAllUser']);

Route::get('login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('forgot-password', [AuthController::class, 'showForgetPasswordForm'])->name('forgot.password')->middleware('guest');
Route::post('post-forgot-password', [AuthController::class, 'submitForgetPasswordForm'])->name('forgot.password.post'); 