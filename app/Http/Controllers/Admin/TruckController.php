<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Truckadd;
use App\Models\Truck_type;
use File;
use Image;
use MongoDB\BSON\ObjectId;
use Auth;
use PDF;

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

    public function truck_getTrucktype(Request $request){
        $companyId=1;
       
        $truck_type = Truck_type::where('companyID',$companyId)->first();
    
       return response()->json($truck_type, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
        //return response()->json($truck, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }
    
    public function addTruckData(Request $request){
        request()->validate([
            //'truckNumber' => 'required',
            // 'truckType' => 'required',
            // 'licensePlate' => 'required',
            // 'plateExpiry' => 'required',
            // 'ownership' => 'required',
            // 'vin' => 'required',
        ]);
  
//file upload
      $path = public_path().'/TruckFile';
      if(!File::exists($path)) {
        File::makeDirectory($path, $mode = 0777, true, true);
        }
        $privilege=Auth::user()->privilege;
        try{
            if ($files = $request->file('file')) {
                foreach ($request->file('file') as $file) {
                    
                    $name =  time().rand(0,1000).$file->getClientOriginalName();
                    $filePath=$file->move(public_path() . '/TruckFile/', $name);
                    $data[] = $name;
                    $size = File::size($filePath);
                    
                    $truckfile[]=array(
                        '_id' => 0,
                        'mainid' =>'' ,
                        'status' => 'truckadd',
                        'filename' =>$name ,
                        'originalname' => $file->getClientOriginalName(),
                        'filesize' =>$size ,
                        'targetfilepath' => "TruckFile/".$name,
                        'index' =>0,
                        'companyId' => 1,
                        'privilege' => $privilege,
                    );
                }
            }
        }
        catch(\Exception $error){
            return $error->getMessage();
        }

// add data in truck        
        try{
            $Truck=Truckadd::all();
            $companyID=(int)1;

            $getTruck = Truckadd::where('companyID',$companyID)->first();
                if($getTruck){
                    $totalTruckArray=count($getTruck->truck);
                }else{
                    $totalTruckArray=0; 
                }
                if(isset($truckfile)){
                    $truckDoc=array($truckfile);
                }else{
                    $truckDoc=array();
                }
            
            $truckData[]=array(    
                    '_id' => $totalTruckArray,
                    //'_id' => new ObjectId(),
                    'counter' => 0,
                    'truckNumber' => $request->truck_number,
                    'truckType' => $request->trucktypeId,
                    'licensePlate' => $request->license_plate,
                    'plateExpiry' => $request->plate_expiry,
                    'inspectionExpiry' => $request->inspection,
                    'status' => $request->truck_status,
                    'ownership' => $request->ownership,
                    'mileage' => $request->mileage,
                    'axies' => $request->axies,
                    'year' => $request->year,
                    'fuelType' => $request->fuel_type,
                    'startDate' => $request->start_date,
                    'deactivationDate' => $request->deactivation,
                    'ifta' => $request->ifta,
                    'registeredState' => $request->RegisteredState,
                    'insurancePolicy' => $request->Insurance_Policy,
                    'grossWeight' => $request->gross,
                    'vin' => $request->vin,
                    'dotexpiryDate' => $request->dot,
                    'transponder' => $request->transponder,
                    'internalNotes' => $request->internal_note,
                    'trucDoc' => $truckDoc,
                    'insertedTime' => time(),
                    'insertedUserId' =>Auth::user()->_id,
                    'edit_by' =>Auth::user()->userName,
                    'edit_time' =>'',
                    'deleteStatus' => "NO",
                    'deleteUser' => "",
                    'deleteTime' => "",
                        
                );
// dd($driverData[]);
                if($getTruck){
                    $truckArray=$getTruck->truck;
                    Truckadd::where(['companyID' =>$companyID ])->update([
                        'counter'=> $totalTruckArray+1,
                        'truck' =>array_merge($truckArray,$truckData) ,
                    ]);

                    $data = [
                        'success' => true,
                        'message'=> 'Truck added successfully'
                    ] ;
                    
                    return response()->json($data);
                }else{
                    if(Truckadd::create([
                        '_id' => new ObjectId(),
                        'companyID' => $companyID,
                        'counter' => $totalTruckArray+1,
                        'truck' => $truckData,
                    ])) {
                        $data = [
                            'success' => true,
                            'message'=> 'Truck added successfully'
                            ] ;
                            return response()->json($data);
                    }
                }
        } 
        catch(\Exception $error){
            return $error->getMessage();
        }
    
       
    }

    // public function updateCurrency(Request $request){
    //     //dd($request->currencyType);
    //     $companyID=1;

    //     $currencyId=$request->currencyId;
    //     $result = Currency_add::where('companyID',$companyID )->first();
    //     $CurrencyArray=$result->currency;

    //     $arrayLength=count($CurrencyArray);
    //     $i=0;
    //     $v=0;

    //     for ($i=0; $i<$arrayLength; $i++){
    //         $id=$result->currency[$i];

    //         if($id['_id']== $currencyId){
    //             echo $i;
    //             $v=$i; 
    //         }
    //     }
    //    ////


    //     $CurrencyArray[$v]['currencyType'] = $request->currencyType;
    //    // dd($CurrencyArray);
    //     $result->currency = $CurrencyArray;
    //     if($result->save()){
    //             $arr = array('status' => 'success', 'message' => 'Currency edited successfully.','statusCode' => 200); 
    //             return json_encode($arr);
    //     }  
    // } 
}
