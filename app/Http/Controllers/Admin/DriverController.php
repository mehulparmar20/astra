<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\Driver;
use App\Models\PasswordReset;
use Mail; 
use Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DriverController extends Controller
{
    public function getDriverData(Request $request){
        $driver = Driver::all();
        return response()->json($driver);  
    }

    public function addDriverData(Request $request)
    {
		 $companyID=$request->companyID;
        
        $getCompany = Driver::where('companyID',25)->first();
        $driverArray=$getCompany->driver;              
        
        
       
        $password = sha1($request->password);
        $driverData[]=array(    
               '_id' => 0,
                        'counter' => 0,
                        'ownerID' => 0,
                        
                        'driverName' => $request->name,
                        'driverUsername' => $request->username,
                        'driverAddress' => $request->address,
                        'driverTelephone' => $request->telephone,
                        'driverAlt' => $request->altTelephone,
                        'driverEmail' => $request->email,
                        'driverPassword' => $password,
                        'driverLocation' => $request->location,
                        'driverZip' => $request->zip,
                        'driverStatus' => $request->status,
                        'driverSocial' => $request->socialSecurityNo,
                        'dateOfbirth' => $request->dateOfBirth,
                        'dateOfHire' => $request->dateOfHire,
                        'driverLicenseNo' => $request->licenseNo,
                        'driverLicenseIssue' => $request->licenseIssueState,
                        'driverLicenseExp' => $request->licenseExpDate,
                        'driverLastMedical' => $request->lastMedical,
                        'driverNextMedical' => $request->nextMedical,
                        'driverLastDrugTest' => $request->lastDrugTest,
                        'driverNextDrugTest' => $request->nextDrugTest,
                        'passportExpiry' => $request->passportExpiry,
                        'fastCardExpiry' => $request->fastCardExpiry,
                        'hazmatExpiry' => $request->hazmatExpiry,
                        'rate' => $request->rate,
                        'currency' => $request->currency,
                        // 'driverLoadedMile' => $request->  ,
                        // 'driverEmptyMile' => $request->  ,
                        // 'pickupRate' => $request->  ,
                        // 'pickupAfter' => $request->  ,
                        // 'dropRate' => $request->  ,
                        // 'dropAfter' => $request->  ,
                        // 'tarp' => $request->  ,
                        // 'percentage' => $request->  ,
                        'driverBalance' => $request->driverBalance,
                        'terminationDate' => $request->terminationDate,
                        'internalNotes' => $request->internalNotes,

                        // 'recurrencePlus' => $request->recurrencePlus,
                        // 'recurrenceAdd' => (Array)array(

                        //     )
                        // 'driverDoc' => (Array)array(

                        //     )
                        // 'recurrenceMin' => $request->recurrenceMin,
                        // 'recurrenceSubtract' => (Array)array(
                        //     '_id'
                        //     'installmentCategoryStore' => $request->  ,
                        //     'installmentTypeStore' => $request->  ,
                        //     'amountStore' => $request->  ,
                        //     'installmentStore' => $request->  ,
                        //     'startNoStore' => $request->  ,
                        //     'currentNoStore' => $request->  ,
                        //     'startDateStore' => $request->  ,
                        //     'currentDateStore' => $request->  ,
                        //     'internalNoteStore' => $request->  ,
                        //     )
                        
                        'userLocation' => $request->userLocation,
                        'userTelephone' => $request->userTelephone,
                        // 'insertedTime' => $request->  ,
                        // 'insertedUserId' => $request->  ,
                        // 'deleteStatus' => $request->  ,
                        // 'deleteUser' => $request->  ,
                        // 'deleteTime' => $request->  ,
                        // 'LastUpdateId' => $request->  ,
                        // 'ownerOperatorStatus' => $request->  ,
                        );
    //    dd($driver);         

            if($getCompany){
                 //echo "a";
                 //die;

              //   $driverArray[]=$driverData;
                //  echo json_encode($driverArray);
                //  die;

                // $driverArray=[
                //     ['id' => 123],
                //     ['id' => 456]
                // ];

                //array_push($driverData, $driverArray);
                 

                Driver::where(['companyID' =>1 ])->update([
                            
                    // 'companyID' => (int)$_SESSION['companyId'],
                    //'_id' => 1,
                    // 'companyID' => 25,
                    // 'counter' => 100,
                    //'driver' =>array_push($driverData, $driverArray) ,
                    'driver' =>array_merge($driverData,$driverArray) ,
                    // 'user_type' => "user",
        
                    // 'deleteStatus' => 0,
                    // 'mode' => 'day',
                    // 'otp' => '',
                    // 'emailVerificationStatus' => 1,
                    
                ]);
                //die;


                //array_push($driverArray, $driverData);
                $arr = array('status' => 'success', 'message' => 'driver added successfully.'); 
                return json_encode($arr);
            }else{
                // echo "o";
                try{
                   
                        if(Driver::create([
                            
                            // 'companyID' => (int)$_SESSION['companyId'],
                            '_id' => 1,
                            'companyID' => $request->companyID,
                            'counter' => 0,
                            'driver' => array($driverData),
                            // 'user_type' => "user",
                
                            // 'deleteStatus' => 0,
                            // 'mode' => 'day',
                            // 'otp' => '',
                            // 'emailVerificationStatus' => 1,
                            
                        ])) {
                            $arr = array('status' => 'success', 'message' => 'driver added successfully.'); 
                            return json_encode($arr);
                        }
                }
                catch(\Exception $error){
                    return $error->getMessage();
                }
            }

        

    }

    //edit driver
    public function editDriverData(Request $request)
    {
       //dd($request->id());
        $editDriver = Driver::where('_id','2')->get()->toArray();
        dd($editDriver);
       // return response()->json($driver);  
    }    
}

    


