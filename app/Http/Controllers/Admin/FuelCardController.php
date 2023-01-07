<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FuelCard;
use App\Models\FuelVendor;
use App\Models\Driver;
use File;
use Image;
use MongoDB\BSON\ObjectId;
use Auth;
use PDF;

use Illuminate\Database\Eloquent\Collection;

class FuelCardController extends Controller
{
    public function getFuelCard(Request $request){
        $companyId=1;
        $FuelCard = FuelCard::where('companyID',$companyId)->first();
        $FuelVendor = FuelVendor::where('companyID',$companyId)->first();
        $driver = Driver::where('companyID',$companyId )->first();
       //dd($FuelCard);
       return response()->json(['FuelCard'=>$FuelCard, 'FuelVendor'=>$FuelVendor, 'driver'=>$driver], 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
       // return response()->json($FuelCard, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

   

    
}
