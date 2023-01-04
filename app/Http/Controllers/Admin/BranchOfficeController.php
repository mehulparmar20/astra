<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Office;
use File;
use Image;
use MongoDB\BSON\ObjectId;
use Auth;
use PDF;

use Illuminate\Database\Eloquent\Collection;

class BranchOfficeController extends Controller
{
    public function getBranchOffice(Request $request){
        //$companyId=1;
        $Office = Office::get();
       return response()->json(['Office'=>$Office], 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

   

    
}
