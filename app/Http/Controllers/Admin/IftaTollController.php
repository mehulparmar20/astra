<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FuelReceipt;
use File;
use Image;
use MongoDB\BSON\ObjectId;
use Auth;
use PDF;

use Illuminate\Database\Eloquent\Collection;

class IftaTollController extends Controller
{
    public function getFuelReceipt(Request $request){
        $companyId=1;
        $FuelReceipt = FuelReceipt::where('companyID',$companyId)->first();
        // $FuelVendor = FuelVendor::where('companyID',$companyId)->first();
        // $driver = Driver::where('companyID',$companyId )->first();
       //dd($FuelCard);
       //return response()->json(['FuelCard'=>$FuelCard, 'FuelVendor'=>$FuelVendor, 'driver'=>$driver], 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
       return response()->json($FuelReceipt, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

   

    
}
