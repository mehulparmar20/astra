<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\Driver;
use App\Models\PasswordReset;
use Mail; 
use Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DriverController extends Controller
{
    public function getDriverData(Request $request){
        $driver = Driver::all();
        return response()->json($driver);  
    }

    public function addDriverData(Request $request){
        // dd($request->all);
      
        // $companyID="23";
        $driver = new Driver();
        
        $driver->companyID = $request->companyID;
       
        $driver->save();

        $arr = array('status' => 'success', 'message' => 'driver added successfully.'); 
                    return json_encode($arr);
    }
    
}