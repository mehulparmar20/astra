<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Driver;
use Illuminate\Database\Eloquent\Collection;

class CustomerController extends Controller
{
    public function getCustomerData(Request $request){
        $customer1 = Customer::all();
        return response()->json($customer1, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }
}
