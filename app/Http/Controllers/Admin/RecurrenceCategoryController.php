<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RecurrenceCategory;
use File;
use Image;
use MongoDB\BSON\ObjectId;
use Auth;
use PDF;

use Illuminate\Database\Eloquent\Collection;

class RecurrenceCategoryController extends Controller
{
    public function getRecurrenceCategory(Request $request){
        $companyId=1;
       $RecurrenceCategory = RecurrenceCategory::where('companyID',$companyId)->get();  //only for company id one
    //    $RecurrenceCategory = RecurrenceCategory::get();
       return response()->json(['RecurrenceCategory'=>$RecurrenceCategory], 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

    public function addRecurrenceCategory(Request $request){

        $companyID=1;
        $totalRecurrenceCategoryArray=0;
        $getCompany_RecurrenceCategory = RecurrenceCategory::where('companyID',$companyID)->first();

        if($getCompany_RecurrenceCategory){
            $RecurrenceCategory_Array=$getCompany_RecurrenceCategory->fixPay;
            $total_RecurrenceCategory_Array=count($RecurrenceCategory_Array)+ 1;
        }
  
        $RecurrenceCategory_Data[]=array(    
                       '_id' => count($RecurrenceCategory_Array),
                       'fixPayType' => $request->fixPayType_name,
                       'counter' => 0,
                       'created_by' => Auth::user()->userFirstName,
                       'deleteStatus' => 'NO',
                       'deleteUser' => '',
                       'deleteTime' => '',
                       );

        if($getCompany_RecurrenceCategory){
            RecurrenceCategory::where(['companyID' => $companyID])->update([
                'counter'=> $total_RecurrenceCategory_Array,
                'fixPay' =>array_merge($RecurrenceCategory_Array,$RecurrenceCategory_Data) ,
            ]);

            $arrr_RecurrenceCategory = array('status' => 'success', 'message' => 'Equipment Type added successfully.'); 
            return json_encode($arrr_RecurrenceCategory);
        }else{
            try{
                    if(RecurrenceCategory::create([
                        // 'companyID' => (int)$_SESSION['companyId'],
                        '_id' => 0,
                        'companyID' => $companyID,
                        'counter' => 1,
                        'fixPay' => $RecurrenceCategory_Data,
                    ])) {
                        $arrr_RecurrenceCategory = array('status' => 'success', 'message' => 'Equipment Type added successfully.'); 
                        return json_encode($arrr_RecurrenceCategory);
                    }
            }
            catch(\Exception $error){
                return $error->getMessage();
            }
        }

      
   }

    
}
