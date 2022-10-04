<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        $driverData=Driver::all();
        // dd($driverData);
        return redirect('driverModal');
        
    }


   
}