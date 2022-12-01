<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Truckadd;
use App\Models\Truck_type;

use Illuminate\Database\Eloquent\Collection;

class TruckController extends Controller
{
    public function getTruck(Request $request){
        $companyId=1;
        $truck = Truckadd::where('companyID',$companyId)->first();
        $truck_type = Truck_type::where('companyID',$companyId)->first();
        //dd($truck);
       return response()->json(['truck'=>$truck,'truck_type'=>$truck_type], 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
        //return response()->json($truck, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }


    public function updateCurrency(Request $request){
        //dd($request->currencyType);
        $companyID=1;

        $currencyId=$request->currencyId;
        $result = Currency_add::where('companyID',$companyID )->first();
        $CurrencyArray=$result->currency;

        $arrayLength=count($CurrencyArray);
        $i=0;
        $v=0;

        for ($i=0; $i<$arrayLength; $i++){
            $id=$result->currency[$i];

            if($id['_id']== $currencyId){
                echo $i;
                $v=$i; 
            }
        }
       ////


        $CurrencyArray[$v]['currencyType'] = $request->currencyType;
       // dd($CurrencyArray);
        $result->currency = $CurrencyArray;
        if($result->save()){
                $arr = array('status' => 'success', 'message' => 'Currency edited successfully.','statusCode' => 200); 
                return json_encode($arr);
        }  
    } 
}
