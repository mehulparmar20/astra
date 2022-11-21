<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\CompanyController;

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

Route::get('/table', function () {
        return view('table');
    });

    Route::get('/admin/driverApplication2', function () {
        return view('driver_application_form2');
    });
    Route::get('/admin/driverApplication', function () {
        return view('driver_application_form');
    });
    // Route::get('profile', function () {
    //     return view('profile');
    // });

Auth::routes();

Route::get('admin/dashboard', [AuthController::class, 'dashboard']);
Route::get('admin/user', [UserController::class, 'getAllUser']);
Route::get('admin/user-privilege', [UserController::class, 'user']);
Route::post('admin/add-user', [UserController::class, 'addUsers']);
Route::post('admin/edit-user', [UserController::class, 'userEditDetails']);
Route::post('admin/delete-user', [UserController::class, 'deleteUser'])->name('user.delete');
Route::get('admin/profile', [UserController::class, 'getUser']);
Route::post('admin/profile-edit', [UserController::class, 'editUserDetails'])->name('profile.edit');
Route::post('admin/download-pdf', [UserController::class, 'downloadPDF'])->name('download-pdf');

Route::get('login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('forgot-password', [AuthController::class, 'showForgetPasswordForm'])->name('forgot.password')->middleware('guest');
Route::post('post-forgot-password', [AuthController::class, 'submitForgetPasswordForm'])->name('forgot.password.post'); 

// Driver
Route::get('admin/driver', [DriverController::class, 'getDriverData']);
Route::post('admin/addDriver', [DriverController::class, 'addDriverData']);
Route::post('admin/editDriver', [DriverController::class, 'editDriverData']);
Route::post('admin/updateDriver', [DriverController::class, 'updateDriverData']);
Route::post('admin/deleteDriver', [DriverController::class, 'deleteDriver']);
Route::post('admin/addApplicationForm', [DriverController::class, 'addApplicationFormData']);
Route::post('admin/setupDriver', [DriverController::class, 'setupDriver']);
Route::post('admin/driverPDF', [DriverController::class, 'downloadPDF'])->name('driver-pdf');
Route::get('admin/getContract', [DriverController::class, 'getContract']);
Route::post('admin/addDriverContractCategory', [DriverController::class, 'addDriverContractCategory']);
Route::get('admin/viewDriverApplication', [DriverController::class, 'getViewDriverApplication']);
Route::post('admin/addOwnerOparator', [DriverController::class, 'addOwnerOparator']);

//customer
Route::get('admin/customer', [CustomerController::class, 'getCustomerData']);
Route::post('admin/addCustomer', [CustomerController::class, 'addCustomerData']);
Route::get('admin/customerCurrency', [CustomerController::class, 'getCustomerCurrency']);
Route::get('admin/getCustomerPaymentTerms', [CustomerController::class, 'getCustomerPaymentTerms']);
Route::get('admin/getCustomerBFactoringCompany', [CustomerController::class, 'getCustomerBFactoringCompany']);
Route::post('admin/addCurrency', [CustomerController::class, 'addCustomerCurrency']);
Route::post('admin/PaymentTerms', [CustomerController::class, 'addCustomerPaymentTerms']);
Route::post('admin/factoringCompany', [CustomerController::class, 'addCustomerfactoringCompany']);

//company
Route::get('admin/company', [CompanyController::class, 'getCompanyData']);
Route::post('admin/addCompanyData', [CompanyController::class, 'addCompanyData']);