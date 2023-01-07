<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Factoring_company_add;
use App\Models\Currency_add;
use File;
use Image;
use MongoDB\BSON\ObjectId;
use Auth;
use PDF;

use Illuminate\Database\Eloquent\Collection;

class factCompanyController extends Controller
{
    public function getFactCompany(){
        $companyId=1;
        $FactCompany = Factoring_company_add::where('companyID',$companyId)->first();
       // dd($FactCompany);
       return response()->json($FactCompany, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
       
    }
    public function get_currency_Type(Request $request)
    {
        $companyId=1;   
        $Currency_add = Currency_add::where('companyID',$companyId)->first();    
        return response()->json($Currency_add, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }



}
