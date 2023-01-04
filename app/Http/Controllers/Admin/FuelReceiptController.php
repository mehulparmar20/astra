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

class FuelReceiptController extends Controller
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
    public function createFuelReceipt(Request $request)
    {
        $companyId=(int)1;
        $FuelReceipt = FuelReceipt::where('companyID',$companyId)->get();
        return response()->json($FuelReceipt, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }
    public function saveFuelReceipt(Request $request)
    {
        
        request()->validate([
       
        ]);
        
        $FuelReceipt = FuelReceipt::all();
   
        $companyId=(int)1;
        $totalFuelReceiptArray=0;
        $getFuelReceipt = FuelReceipt::where('companyID',$companyId)->first();

        if($getFuelReceipt){
            $FuelReceiptArray=$getFuelReceipt->fuel_receipt;
            $totalFuelReceiptArray=count($FuelReceiptArray)+ 1;
        }
        $FuelReceiptData[]=array(    
                        '_id' => $totalFuelReceiptArray ,
                        // 'counter' => 0,
                        'driverName' => $request->driverName,
                        'driverNumber' => $request->driverNumber,
                        'cardNo' => $request->cardNo,
                        'category' => $request->category,
                        'fuelType' => $request->fuelType,
                        'truckNumber' => $request->truckNumber,
                        'transactionTime' => $request->transactionTime,
                        'locationName' => $request->locationName,
                        'locationCity' => $request->locationCity,
                        'locationState' => $request->locationState,
                        'quantity' => $request->quantity,
                        'amount' => $request->amount,
                        'totalAmount' => $request->totalAmount,
                        'transactionDiscount' => $request->transactionDiscount,
                        'transactionFee' => $request->transactionFee,
                        'transactionGross' => $request->transactionGross,
                        'invoiceNo' => $request->invoiceNo,
                        'insertedTime' => '' ,
                        'insertedUserId' => '' ,
                        'deleteStatus' => 'NO' ,
                        'deleteUser' => '' ,
                        'deleteTime' => '' ,
                        'averagedays' =>'' ,
                        'totalloads' => '' ,

                        );
           
            if($getFuelReceipt){
                FuelReceipt::where(['companyID' =>$companyId])->update([
                    'counter'=> $totalFuelReceiptArray,
                    'fuel_receipt' =>array_merge($FuelReceiptData,$FuelReceiptArray) ,
                    
                ]);

                $arrCustome = array('status' => 'success', 'message' => 'Fuel Receipt added successfully.'); 
                return json_encode($arrCustome);
            }
           
    }
    public function editFuelReceipt(Request $request)
    {
        
    }
    public function updateFuelReceipt(Request $request)
    {
        
    }
    public function deleteFuelReceipt(Request $request)
    {
        $id=$request->id;
        $companyID=(int)$request->companyID;
        $fuelReceipt=FuelReceipt::where('companyID',$companyID)->first();
        $fuelReceiptArray=$fuelReceipt->fuel_receipt;
        $arrayLength=count($fuelReceiptArray);
        $i=0;
        $v=0;
       for ($i=0; $i<$arrayLength; $i++){
            $ids=$fuelReceipt->fuel_receipt[$i];
            foreach ($ids as $value){
                if($value==$id)
                {
                    $v=$i;
                }
            }
        }
        $fuelReceiptArray[$v]['deleteStatus'] = "YES";
        $fuelReceipt->fuel_receipt= $fuelReceiptArray;
        if($fuelReceipt->save())
        {
         $arr = array('status' => 'success', 'message' => 'fuel receipt Deleted successfully.','statusCode' => 200); 
         return json_encode($arr);
        }
    }
    public function restoreFuelReceipt(Request $request)
    {
        $fuelReceIds=$request->all_ids;
        $custID=(array)$request->custID;
        foreach($custID as $fuel_re_id)
        {
            $fuel_re_id=str_replace( array( '\'', '"',
            ',' , ' " " ', '[', ']' ), ' ', $fuel_re_id);
            $fuel_re_id=(int)$fuel_re_id;
            $FuelReceipt = FuelReceipt::where('companyID',$fuel_re_id )->first();
            $fuelReceiptArray=$FuelReceipt->fuel_receipt;
            $arrayLength=count($fuelReceiptArray);            
            $i=0;
            $v=0;
            $data=array();
            for ($i=0; $i<$arrayLength; $i++){
                $ids=$FuelReceipt->fuel_receipt[$i]['_id'];
                $ids=(array)$ids;
                foreach ($ids as $value){
                    $fuelReceIds= str_replace( array('[', ']'), ' ', $fuelReceIds);
                    if(is_string($fuelReceIds))
                    {
                        $fuelReceIds=explode(",",$fuelReceIds);
                    }
                    foreach($fuelReceIds as $fuelReId)
                    {
                        $fuelReId= str_replace( array('"', ']' ), ' ', $fuelReId);
                        if($value==$fuelReId)
                        {                        
                            $data[]=$i; 
                        }
                    }
                }
            }
            foreach($data as $row)
            {
                $fuelReceiptArray[$row]['deleteStatus'] = "NO";
                $FuelReceipt->fuel_receipt= $fuelReceiptArray;
                $save=$FuelReceipt->save();
            }
            if ($save) {
                $arr = array('status' => 'success', 'message' => 'Fuel Receipt Restored successfully.','statusCode' => 200); 
                return json_encode($arr);
            }
        }
    }
   

    
}
