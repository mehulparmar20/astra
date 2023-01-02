<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment_terms;
use File;
use Image;
use MongoDB\BSON\ObjectId;
use Auth;
use PDF;

use Illuminate\Database\Eloquent\Collection;

class PaymentTermsController extends Controller
{
    public function getPaymentTerms(Request $request){
        $companyId=1;
        $PaymentTterms = Payment_terms::where('companyID',$companyId)->get();  //only for company id one
       //$PaymentTterms = Payment_terms::get();
       return response()->json(['PaymentTterms'=>$PaymentTterms], 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

   

    
}
