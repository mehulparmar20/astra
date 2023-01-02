<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bank;
use File;
use Image;
use MongoDB\BSON\ObjectId;
use Auth;
use PDF;

use Illuminate\Database\Eloquent\Collection;

class BankController extends Controller
{
    public function getBankData(Request $request){
        //$companyId=1;
        //$bankData = Bank::where('deleteStatus','NO')->get();
        $bankData = Bank::get();
       //dd($bankData);
       return response()->json($bankData, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

   

    
}
