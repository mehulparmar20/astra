<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\Driver;
use App\Models\User;
use App\Models\PasswordReset;
use Mail; 
use Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;
use HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
class DriverController extends Controller
{
//add by Reena
    public function getDriverData(Request $request){
        $driver = Driver::all();
        
        return response()->json($driver);  
    }
//add by Reena
    public function addDriverData(Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required|unique:driver,driverEmail',
            'username' => 'required',
            'telephone' => 'required',
            'address' => 'required',
            'location' => 'required',
            'zip' => 'required',
            'licenseNo' => 'required',
            'licenseIssueState' => 'required',
            'licenseExpDate' => 'required',
            'rate' => 'required',
            'companyID' => 'required|unique:driver,companyID'
            // 'currency' => 'required',
        ]);
        try{
            $driver=Driver::all();
    

            $companyID=(int)$request->companyID;

            $getCompany = Driver::where('companyID',$companyID)->first();
    
            $password = sha1($request->password);
            $driverData[]=array(    
                            // '_id' => 4,
                            'counter' => 3,
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
                            'deleteStatus' => "NO",
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
                            
                            // 'userLocation' => $request->userLocation,
                            // 'userTelephone' => $request->userTelephone,
                            // 'insertedTime' => $request->  ,
                            // 'insertedUserId' => $request->  ,
                            // 'deleteStatus' => $request->  ,
                            // 'deleteUser' => $request->  ,
                            // 'deleteTime' => $request->  ,
                            // 'LastUpdateId' => $request->  ,
                            // 'ownerOperatorStatus' => $request->  ,
            );

            if($getCompany){
                $driverArray=$getCompany->driver;
                Driver::where(['companyID' =>$companyID ])->update([
                    'driver' =>array_merge($driverData,$driverArray) ,
                    // 'user_type' => "user",
                    // 'deleteStatus' => 0,
                    // 'mode' => 'day',
                    // 'otp' => '',
                    // 'emailVerificationStatus' => 1,
                ]);

                $data = [
                    'success' => true,
                    'message'=> 'Driver added successfully'
                ] ;
                
                return response()->json($data);
            }else{
                if(Driver::create([
                    
                    // 'companyID' => (int)$_SESSION['companyId'],
                    '_id' => 2,
                    'companyID' => $companyID,
                    'counter' => 0,
                    'driver' => $driverData,
                    // 'user_type' => "user",
                    'deleteStatus' => 0,
                    // 'mode' => 'day',
                    // 'otp' => '',
                    // 'emailVerificationStatus' => 1,
                    
                ])) {
                    $data = [
                        'success' => true,
                        'message'=> 'Driver added successfully'
                        ] ;
                        return response()->json($data);
                }
            }
        } 
        catch(\Exception $error){
            return $error->getMessage();
        }
    }
//add by Reena
    public function addApplicationFormData(Request $request){
        dd($request);
        request()->validate([
            'name' => 'required',
            
        ]);
        try{
            $driver=Driver::all();
            $companyID=(int)$request->companyID;
            $getCompany = Driver::where('companyID',$companyID)->first();
    
            $password = sha1($request->password);
            $driverData[]=array(    
                            // '_id' => 4,
                            'counter' => 3,
                            'ownerID' => 0,
                            'driverName' => $request->name,
            );

            if($getCompany){
                $driverArray=$getCompany->driver;
                Driver::where(['companyID' =>$companyID ])->update([
                    'driver' =>array_merge($driverData,$driverArray) ,
                    // 'user_type' => "user",
                    // 'deleteStatus' => 0,
                    // 'mode' => 'day',
                    // 'otp' => '',
                    // 'emailVerificationStatus' => 1,
                ]);

                $data = [
                    'success' => true,
                    'message'=> 'Driver added successfully'
                ] ;
                
                return response()->json($data);
            }else{
                if(Driver::create([
                    
                    // 'companyID' => (int)$_SESSION['companyId'],
                    '_id' => 2,
                    'companyID' => $companyID,
                    'counter' => 0,
                    'driver' => $driverData,
                    // 'user_type' => "user",
                    'deleteStatus' => 0,
                    // 'mode' => 'day',
                    // 'otp' => '',
                    // 'emailVerificationStatus' => 1,
                    
                ])) {
                    $data = [
                        'success' => true,
                        'message'=> 'Driver added successfully'
                        ] ;
                        return response()->json($data);
                }
            }
        } 
            catch(\Exception $error){
            return $error->getMessage();
        }
    }
 //add by Reena edit driver
    public function editDriverData(Request $request){
        $companyID=(int)$request->com_id;

        $driverEmail=$request->email;
        $result = Driver::where('companyID',$companyID )->first();
        $driverArray=$result->driver;

        $arrayLength=count($driverArray);
       // dd($arrayLength);
        $i=0;
        $v=0;
       for ($i=0; $i<$arrayLength; $i++){
            $id=$result->driver[$i];
                foreach ($id as $value){
                    if($value==$driverEmail){
                        $v=$i;
                     }
                }
       }
       
       $driverEditData=$result->driver[$v];
       return response()->json($driverEditData);  
    }  
//add by Reena
    public function updateDriverData(Request $request){

        request()->validate([
            'updateDriverName' => 'required',
            'updateDriverEmail' => 'required|unique:driver,driverEmail'.$request->updateEmailDriver,
            'updateDriverUsername' => 'required',
            'updateDriverTelephone' => 'required',
            'updateDriverAddress' => 'required',
            'updateDriverLocation' => 'required',
            'updateDriverZip' => 'required',
            'updateDriverLicenseNo' => 'required',
            'updateDriverLicenseIssue' => 'required',
            'updateDriverLicenseExp' => 'required',
            'updateRate' => 'required',
            'updateCurrency' => 'required',
            // 'userTelephone' => 'required|min:11|max:11|numeric',
        ]);

        $companyIDUp=(int)$request->updateComId;
        $driverEmailUp=$request->updateDriverEmail;

        $resultUp = Driver::where('companyID',$companyIDUp )->first();
        $driverArrayUp=$resultUp->driver;

        $arrayLengthUp=count($driverArrayUp);
        $i=0;
        $v=0;
       for ($i=0; $i<$arrayLengthUp; $i++){
            $id=$resultUp->driver[$i];
                foreach ($id as $value){
                    if($value==$driverEmailUp){
                        $v=$i;
                     }
                }
       }

       $driverArrayUp[$v]['driverName']=$request->updateDriverName;
       $driverArrayUp[$v]['driverUsername']=$request->updateDriverUsername;
       if(isset($request->updateDriverPassword)){
            $driverArrayUp[$v]['driverPassword']=sha1($request->updateDriverPassword);
        }else{
            $driverArrayUp[$v]['driverPassword']=$resultUp->driver[$v]['driverPassword'];
        }
       $driverArrayUp[$v]['driverTelephone']=$request->updateDriverTelephone;
       $driverArrayUp[$v]['driverAlt']=$request->updateDriverAlt;
       $driverArrayUp[$v]['driverEmail']=$request->updateDriverEmail;
       $driverArrayUp[$v]['driverAddress']=$request->updateDriverAddress;
       $driverArrayUp[$v]['driverLocation']=$request->updateDriverLocation;
       $driverArrayUp[$v]['driverZip']=$request->updateDriverZip;
       $driverArrayUp[$v]['driverStatus']=$request->updateDriverStatus;
       $driverArrayUp[$v]['driverSocial']=$request->updateDriverSocial;
       $driverArrayUp[$v]['dateOfbirth']=$request->updateDateOfbirth;
       $driverArrayUp[$v]['dateOfhire']=$request->updateDateOfHire;
       $driverArrayUp[$v]['driverLicenseNo']=$request->updateDriverLicenseNo;
       $driverArrayUp[$v]['driverLicenseIssue']=$request->updateDriverLicenseIssue;
       $driverArrayUp[$v]['driverLicenseExp']=$request->updateDriverLicenseExp;
       $driverArrayUp[$v]['driverLastMedical']=$request->updateDriverLastMedical;
       $driverArrayUp[$v]['driverNextMedical']=$request->updateDriverNextMedical;
       $driverArrayUp[$v]['driverLastDrugTest']=$request->updateDriverLastDrugTest;
       $driverArrayUp[$v]['driverNextDrugTest']=$request->updateDriverNextDrugTest;
       $driverArrayUp[$v]['passportExpiry']=$request->updatePassportExpiry;
       $driverArrayUp[$v]['fastCardExpiry']=$request->updateFastCardExpiry;
       $driverArrayUp[$v]['hazmatExpiry']=$request->updateHazmatExpiry;
       $driverArrayUp[$v]['rate']=$request->updateRate;
       $driverArrayUp[$v]['currency']=$request->updateCurrency;
       $driverArrayUp[$v]['driverBalance']=$request->updateDriverBalance;
       $driverArrayUp[$v]['terminationDate']=$request->updateTerminationDate;
       $driverArrayUp[$v]['internalNote']=$request->updateInternalNotes;
        //$driverArrayUp[$v]['driverName']=$request->updateDriverName;
        //$driverArrayUp[$v]['driverName']=$request->updateDriverName;
       $resultUp->driver = $driverArrayUp;
       if($resultUp->save()){
            $arr = array('status' => 'success', 'message' => 'User edited successfully.','statusCode' => 200); 
            return json_encode($arr);
        }
    }
//add by Reena
    public function deleteDriver(Request $request){
        $companyID=(int)$request->com_id;
        $driverEmail=$request->email;
        
        $result = Driver::where('companyID',$companyID )->first();
        $driverArray=$result->driver;

        $arrayLength=count($driverArray);
        $i=0;
        $v=0;
        for ($i=0; $i<$arrayLength; $i++){
                $id=$result->driver[$i];
            
                    foreach ($id as $value){
                        if($value==$driverEmail){
                            $v=$i;
                        }
                    }
        }
   
       $driverArray[$v]['deleteStatus'] = "YES"; 
       $result->driver = $driverArray;

       if ($result->save()) {
            $success = true;
            $message = "Driver deleted successfully";
        } else {
            $success = false;
            $message = "Driver not found";
        }

        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
        
    }  
}

    


