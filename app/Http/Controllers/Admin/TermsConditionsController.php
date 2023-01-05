<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TermsConditions;
use File;
use Image;
use MongoDB\BSON\ObjectId;
use Auth;
use PDF;

use Illuminate\Database\Eloquent\Collection;

class TermsConditionsController extends Controller
{
    public function getTermsConditions(Request $request){
        $companyId=1;
       $TermsConditions = TermsConditions::where('companyID',$companyId)->get();  //only for company id one
    //    $TermsConditions = TermsConditions::get();
       return response()->json(['TermsConditions'=>$TermsConditions], 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

    public function addTermsConditions(Request $request){
                $companyID=1;
                //dd($request);
                $getCompanyForTermsConditions = TermsConditions::where('companyID',$companyID)->first();
                $get = TermsConditions::where('companyID',$companyID)->delete();
                
                $unserializeData = [];
                parse_str($request->data,$unserializeData);
        
                if(isset($unserializeData['specialInstruction'])){
                    foreach($unserializeData['specialInstruction'] as $key => $val){
                    
                        $specialInstruction=$unserializeData['specialInstruction'][$key];
                     
                        $AddInstructionData[]=array(    
                            'instruction' =>$specialInstruction ,
                        );       
                    }
                }else{
                    $AddInstructionData=array();
                }
                
                // $truckno='';
                // $truckno=$unserializeData['ownerTruckNo'];
                // $truckID= explode("-", $truckno);
                //     // $truckID[0]; // piece1.
                   // echo $truckID[1]; // piece2.
                    try{
                       
                            TermsConditions::create([
                                
                                // 'companyID' => (int)$_SESSION['companyId'],
                                '_id' => 1,
                                'companyID' => $companyID,
                                'counter' => 0,
                                'invoiceInstruction' => $request->invoiceInstruction,
                                'invoiceAdvance' => $request->invoiceAdvance,
                                'specialInstruction' => $AddInstructionData,
                                'created_user' => Auth::user()->userName,
                                'created_at' => time(),
                                'updated_at' => '',
                            ]);
                        // }
                    } 
                        catch(\Exception $error){
                        return $error->getMessage();
                    }
            // }
        
                $data = [
                    'success' => true,
                    'message'=> 'Terms & Conditions added successfully'
                    ] ;
                    return response()->json($data);
        
        
        }

    
}
