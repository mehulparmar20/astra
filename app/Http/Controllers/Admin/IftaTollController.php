<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\iftaToll;
use File;
use Image;
use MongoDB\BSON\ObjectId;
use Auth;
use PDF;

use Illuminate\Database\Eloquent\Collection;

class IftaTollController extends Controller
{
    public function getIftaToll(Request $request){
        $companyId=1;
        $iftaToll = iftaToll::where('companyID',$companyId)->first();
        //$iftaToll = iftaToll::where('companyID',$companyId)->get();
       
       return response()->json($iftaToll, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

   

    
}
