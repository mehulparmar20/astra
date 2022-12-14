<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\TruckController;
use App\Http\Controllers\Admin\TrailerAdminAddController;
use App\Http\Controllers\Admin\ShipperController;
use App\Http\Controllers\Admin\ConsigneeController;
use App\Http\Controllers\Admin\factCompanyController;
use App\Http\Controllers\Admin\FuelVendorController;
use App\Http\Controllers\Admin\FuelCardController;
use App\Http\Controllers\Admin\FuelReceiptController;
use App\Http\Controllers\Admin\IftaTollController;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\Admin\CreditCardController;
use App\Http\Controllers\Admin\SubCreditCardController;
use App\Http\Controllers\Admin\AccountManagerController;
use App\Http\Controllers\Admin\BranchOfficeController;
use App\Http\Controllers\Admin\PaymentTermsController;
use App\Http\Controllers\Admin\TrailerAdminAddController;
use App\Http\Controllers\Admin\EquipmentTypeController;
use App\Http\Controllers\Admin\RecurrenceCategoryController;
use App\Http\Controllers\Admin\TermsConditionsController;
use App\Http\Controllers\Admin\TruckTrailerMakeController;
use App\Http\Controllers\Admin\LoadController;
use App\Http\Controllers\Admin\UserPrivillegeController;

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
        return view('layout.driver.driver_application_form2');
    });
    Route::get('/admin/driverApplication', function () {
        return view('driver_application_form');
    });
    // Route::get('profile', function () {
    //     return view('profile');
    // });

Auth::routes();

// User
Route::get('admin/dashboard', [AuthController::class, 'dashboard']);
Route::get('admin/user', [UserController::class, 'getAllUser']);
Route::get('admin/user-privilege', [UserController::class, 'user']);
Route::post('admin/add-user', [UserController::class, 'addUsers']);
Route::post('admin/edit-user', [UserController::class, 'userEditDetails']);
Route::post('admin/delete-user', [UserController::class, 'deleteUser'])->name('user.delete');
Route::get('admin/profile', [UserController::class, 'getUser']);
Route::post('admin/profile-edit', [UserController::class, 'editUserDetails'])->name('profile.edit');
Route::post('admin/download-pdf', [UserController::class, 'downloadPDF'])->name('download-pdf');
Route::post('admin/add_office_address', [UserController::class, 'add_office_address']);
Route::get('admin/get_office_address', [UserController::class, 'get_office_address']);
Route::post('admin/add_company_details', [UserController::class, 'add_company_details']);
Route::get('admin/get_company_details', [UserController::class, 'get_company_details']);

// Login
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
Route::post('admin/editDriverOwner', [DriverController::class, 'editDriverOwnerData']);
Route::post('admin/updateOwnerOparator', [DriverController::class, 'updateOwnerOparator']);
Route::get('admin/driver_getTruck', [DriverController::class, 'driver_getTruck']);
Route::post('admin/deleteDriverOwnerOperator', [DriverController::class, 'deleteDriverOwnerOperator']);
Route::post('admin/restoreDriverOwnerOperator', [DriverController::class, 'restoreDriverOwnerOperator']);
Route::post('admin/deleteViewDriverApp', [DriverController::class, 'deleteViewDriverApp']);

Route::get('admin/editPrivilege', [UserPrivillegeController::class, 'getPrivilegeTable']);

//customer
Route::get('admin/customer', [CustomerController::class, 'getCustomerData']);
Route::post('admin/addCustomer', [CustomerController::class, 'addCustomerData']);
Route::get('admin/edit_customer', [CustomerController::class, 'edit_customer']);
Route::post('admin/update_customer', [CustomerController::class, 'update_customer']);
Route::post('admin/delete_customer', [CustomerController::class, 'delete_customer']);
Route::post('admin/restoreCustomer', [CustomerController::class, 'restoreCustomer']);

//addCurrency
Route::get('admin/customerCurrency', [CustomerController::class, 'getCustomerCurrency']);
Route::get('admin/getCurrency', [CurrencyController::class, 'getCurrency']);
Route::post('admin/addCurrency', [CustomerController::class, 'addCustomerCurrency']);
Route::post('admin/updateCurrency', [CurrencyController::class, 'updateCurrency']);

//PaymentTerms
Route::get('admin/getCustomerPaymentTerms', [CustomerController::class, 'getCustomerPaymentTerms']);
Route::post('admin/PaymentTerms', [CustomerController::class, 'addCustomerPaymentTerms']);
Route::get('admin/getPaymentTerms', [PaymentTermsController::class, 'getPaymentTerms']);

//factoringCompany
Route::get('admin/getCustomerBFactoringCompany', [CustomerController::class, 'getCustomerBFactoringCompany']);
Route::post('admin/factoringCompany', [CustomerController::class, 'addCustomerfactoringCompany']);
Route::get('admin/getFactCompany', [factCompanyController::class, 'getFactCompany']);
Route::get('admin/get_currency_Type', [factCompanyController::class, 'get_currency_Type']);

//company
Route::get('admin/company', [CompanyController::class, 'getCompanyData']);
Route::post('admin/addCompany', [CompanyController::class, 'addCompanyData']);
Route::get('admin/editCompany', [CompanyController::class, 'editCompanyData']);
Route::post('admin/updateCompany', [CompanyController::class, 'updateCompanyData']);
Route::post('admin/deleteCompany', [CompanyController::class, 'deleteCompany']);
Route::post('admin/updateUserCompany', [CompanyController::class, 'updateUserCompany']);

//truck
Route::get('admin/getTruck', [TruckController::class, 'getTruck']);
Route::get('admin/truck_getTrucktype', [TruckController::class, 'truck_getTrucktype']);
Route::post('admin/addTruck', [TruckController::class, 'addTruckData']);
Route::get('admin/edit_truck', [TruckController::class, 'edit_truck']);
Route::post('admin/update_truck', [TruckController::class, 'update_truck']);
Route::post('admin/delete_truck', [TruckController::class, 'delete_truck']);
Route::post('admin/restore_truck', [TruckController::class, 'restore_truck']);
Route::post('admin/create_truckType', [TruckController::class, 'create_truckType']);

//Shipper
Route::get('admin/getShipper', [ShipperController::class, 'getShipper']);

//consignee
Route::get('admin/getConsignee', [ConsigneeController::class, 'getConsignee']);

//TrailerAdminAddController
Route::get('admin/getTrailer', [TrailerAdminAddController::class, 'getTrailer']);
Route::post('admin/addTrailer', [TrailerAdminAddController::class, 'addTrailerData']);
Route::get('admin/trailer_getTrailertype', [TrailerAdminAddController::class, 'trailer_getTrailertype']);
Route::post('admin/trailer_addTrailertype', [TrailerAdminAddController::class, 'trailer_addTrailertype']);
Route::get('admin/edit_trailer', [TrailerAdminAddController::class, 'edit_trailer']);
Route::post('admin/updateTrailer', [TrailerAdminAddController::class, 'updateTrailer']);
Route::post('admin/deleteTrailer', [TrailerAdminAddController::class, 'deleteTrailer']);
