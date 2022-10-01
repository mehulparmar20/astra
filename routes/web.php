<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


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

Route::get('/', function () {
    return view('login');
});




// Auth::routes();

// Route::get('admin/dashboard', [AuthController::class, 'dashboard']);
// Route::get('login', [AuthController::class, 'login'])->name('login');
// Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/index', function () {
//     return view('index');
// });


// Route::get('/admin', function () {
//     return view('dashboard');
// });

route::get('/admin',[DashboardController::class,'index'])->name('admin');
Route::get('/admin1', function () {
    return view('dashboard1');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});
