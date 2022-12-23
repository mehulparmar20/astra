<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CreditCard;
use File;
use Image;
use MongoDB\BSON\ObjectId;
use Auth;
use PDF;

use Illuminate\Database\Eloquent\Collection;

class CreditCardController extends Controller
{
    public function getcreditCard(Request $request){
        //$companyId=1;
        $creditCard = CreditCard::get();
       //dd($bankData);
       return response()->json($creditCard, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

   

    
}
