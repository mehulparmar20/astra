<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FuelVendor;
use File;
use Image;
use MongoDB\BSON\ObjectId;
use Auth;
use PDF;

use Illuminate\Database\Eloquent\Collection;

class FuelVendorController extends Controller
{
    public function getFuelVendor(Request $request){
        $companyId=1;
        $FuelVendor = FuelVendor::where('companyID',$companyId)->first();
       // dd($FuelVendor);
        return response()->json($FuelVendor, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

   

    
}
