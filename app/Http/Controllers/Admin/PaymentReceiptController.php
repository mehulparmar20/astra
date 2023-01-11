<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoiced;
use App\Models\Consignee;
use App\Models\Truckadd;
use File;
use Image;
use MongoDB\BSON\ObjectId;
use Auth;
use PDF;

use Illuminate\Database\Eloquent\Collection;

class PaymentReceiptController extends Controller
{
    public function getPaymentReceipt(Request $request){
        $companyId=1;
        $Shipper = Invoiced::where('companyID',$companyId)->first();       
       return response()->json($Shipper, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }
  
   

    
}
