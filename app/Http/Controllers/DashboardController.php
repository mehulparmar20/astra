<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;
use Hash;

class DashboardController extends Controller
{
    $client = new MongoDB\Client('mongodb+srv://windson:7WUUxJojmKHEKu5d@cluster0.xlwja.mongodb.net/WindsonDispatch');
    $db = $client->WindsonDispatch;
   public function index(){
    $companyName = array();
    $company = $db->company->find(['companyID' => $company_id]);
    foreach ($company as $companyArr) {
        $company_arr = $companyArr['company'];
        foreach ($company_arr as $cy) {
            $comid = $cy['_id'];
            $companyName[$comid] = $cy['companyName'];
        }
    }
    return view('dashboard');
   }
}