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
    public function getDriverData(Request $request){
        $driver = Driver::all();
        
        return response()->json($driver);  
    }

    public function addDriverData(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|unique:user,userEmail',
            'username' => 'required',
            'telephone' => 'required',
            'address' => 'required',
            'location' => 'required',
            'zip' => 'required',
            'licenseNo' => 'required',
            'licenseIssueState' => 'required',
            'licenseExpDate' => 'required',
            'rate' => 'required',
            // 'currency' => 'required',
        ]);
        try{
        $driver=Driver::all();
   
        $companyID=(int)$request->companyID;
        $getCompany = Driver::where('companyID',$companyID)->first();
   
        $password = sha1($request->password);
        $driverData[]=array(    
                        '_id' => 4,
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
   // dd($getCompany);         
   // $getCompany="";
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
                // echotry{ "o";
                
                   
                        if(Driver::create([
                            
                            // 'companyID' => (int)$_SESSION['companyId'],
                            '_id' => 2,
                            'companyID' => $companyID,
                            'counter' => 0,
                            'driver' => $driverData,
                            // 'user_type' => "user",
                            // 'deleteStatus' => 0,
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

        

 


    //edit driver
    public function editDriverData(Request $request)
    {
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
       
       $driverEditData=$result->driver[$v];
       return response()->json($driverEditData);  
    }  
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
    //    $driverArrayUp[$v]['driverName']=$request->updateDriverName;
    //    $driverArrayUp[$v]['driverName']=$request->updateDriverName;
       $resultUp->driver = $driverArrayUp;
       if($resultUp->save()){
            $arr = array('status' => 'success', 'message' => 'User edited successfully.','statusCode' => 200); 
            return json_encode($arr);
        }
    }

//     public function deleteDriver(Request $request)
//     {
   
//         $companyID=(int)$request->com_id;
//         $driverEmail=$request->email;
//         // dd($driverEmail);
     
//         $result = Driver::where('companyID', $companyID )->first();
//         $driverArray=$result->driver;
//         $arrayLength=count($driverArray);
//         $i=0;
//         $v=0;
//        for ($i=0; $i<$arrayLength; $i++){
//             $id=$result->driver[$i];
//             dd($id);
//                 foreach ($id as $value){
//                     dd($value);
//                     if($value==$driverEmail){

//                         dd($i);
//                         $v=$i;
//                     }
//                 }  
//        }
//        dd($driverArray[$v]['driverEmail']);

//     //    $result = collect($result)->map(function ($result) {
//     //         $result['driver'] = collect($result['driver'])->filter(function ($driver) {
//     //             return $driver['driverEmail'] != $driverEmail;   
//     //         })->values()->toArray(); 
//     //         dd($result);
//     //         return $result;
//     //     });

//        //$result->delete(array($result->driver[$v])); //delete whole array

//     //    $this->database->$driverArray->update(
//     //     array( 'driver' => array( '$exists' => true ) ),
//     //     array( '$unset' => array( 'driver' => $v ) ),
//     //     array( 'multiple' => true )
//     // );
// // dd($result->driver[$v]);
//     //    $db->Driver->update(
//     //     { 'companyID': 1}, 
//     //     { $pull: { driver: { driverEmail: $driverEmail } } },
//     //     false, // Upsert
//     //     true, // Multi
//     // );

//     // $data=Driver::update("city"=>"Palo Alto",["$pull":{"friends":{"name":"Frank"}}]);

//        //if($result->driver[0]){
//         //unset($result->driver[$v]);
//        //}
//        $delete = $driverArray->delete();



//         //    try{
//         //     $dataDriver = Driver::where('companyID', '28')->first();
//         //     $dataDriver->driver = '5';
//         //     $dataDriver->save();
//         //         if($data){
//         //             dd($dataDriver);
//         //             $driverDelArr = array('status' => 'success', 'message' => 'Driver delete successfully.','statusCode' => 200); 
//         //             return json_encode($driverDelArr);
//         //         }
//         //     }
//         //     catch(\Exception $error){
//         //         return $error->getMessage();
//         //     }

    
    
//       //$db = Driver::where('driver.driverEmail','rp@gmail.com')->first();
//       //$db = Driver::where('driver.driverEmail','','rp@gmail.com')->first();
      

//     //   $result =$db->driver->updateOne(['driver.driverEmail =' => 'rp@gmail.com'],
//     //                         ['$set' => ['driver.$.deleteStatus' => 'YES','driver.$.deleteUser' => "ReenaP",'driver.$.deleteTime' => time()]]
//     //     );
//         //dd($id[]);

//       //$array1= db.WindsonDispatch.remove( { driver._id: $driverID, true )

//        //$array1 = Driver::where('companyID',$companyID)->first();



//        //print_r($array1);
//        //die();
      
//         //$deleteDriverRecord = Driver::where('_id','2')->get()->toArray();
        
//         //$data=$delete['driver' => _id];
//        // $data = db.WindsonDispatch.deleteOne('driver').find({'driver._id' :$_id });
       
//         // if($delete){
//         //     $delete1 = Driver::where('driver._id',$_id)->first();
//         // }
//         // $items = collect($delete1->items);
//         // $reference_mails = $items->map(function($item){
        
//         // });
        
      
//         //$delete = User::where('userEmail','=', 'brad@osttbrokerage.com')->first();
//               //dd($delete1);
//         // if($delete){
//         //     $arr = array('status' => 'success', 'message' => 'User deleted successfully.'); 
//         //     return json_encode($arr);
//         // }
//     }  

    public function deleteDriver(Request $request)
    {
   
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
                        echo $i;
                        $v=$i;
                     }
                }
       }

    //    $result = collect($result)->map(function ($result) {
    //         $result['driver'] = collect($result['driver'])->filter(function ($driver) {
    //             return $driver['driverEmail'] != $driverEmail;   
    //         })->values()->toArray(); 
    //         dd($result);
    //         return $result;
    //     });

       //$result->delete(array($result->driver[$v])); //delete whole array

    //    $this->database->$driverArray->update(
    //     array( 'driver' => array( '$exists' => true ) ),
    //     array( '$unset' => array( 'driver' => $v ) ),
    //     array( 'multiple' => true )
    // );
// dd($result->driver[$v]);
    //    $db->Driver->update(
    //     { 'companyID': 1}, 
    //     { $pull: { driver: { driverEmail: $driverEmail } } },
    //     false, // Upsert
    //     true, // Multi
    // );

    // $data=Driver::update("city"=>"Palo Alto",["$pull":{"friends":{"name":"Frank"}}]);

       //if($result->driver[0]){
        //unset($result->driver[$v]);
       //}
       $result->driver[$v] = $driverArray;
       dd($driverArray->delete());



        //    try{
        //     $dataDriver = Driver::where('companyID', '28')->first();
        //     $dataDriver->driver = '5';
        //     $dataDriver->save();
        //         if($data){
        //             dd($dataDriver);
        //             $driverDelArr = array('status' => 'success', 'message' => 'Driver delete successfully.','statusCode' => 200); 
        //             return json_encode($driverDelArr);
        //         }
        //     }
        //     catch(\Exception $error){
        //         return $error->getMessage();
        //     }

    
    
      //$db = Driver::where('driver.driverEmail','rp@gmail.com')->first();
      //$db = Driver::where('driver.driverEmail','','rp@gmail.com')->first();
      

    //   $result =$db->driver->updateOne(['driver.driverEmail =' => 'rp@gmail.com'],
    //                         ['$set' => ['driver.$.deleteStatus' => 'YES','driver.$.deleteUser' => "ReenaP",'driver.$.deleteTime' => time()]]
    //     );
        //dd($id[]);

      //$array1= db.WindsonDispatch.remove( { driver._id: $driverID, true )

       //$array1 = Driver::where('companyID',$companyID)->first();



       //print_r($array1);
       //die();
      
        //$deleteDriverRecord = Driver::where('_id','2')->get()->toArray();
        
        //$data=$delete['driver' => _id];
       // $data = db.WindsonDispatch.deleteOne('driver').find({'driver._id' :$_id });
       
        // if($delete){
        //     $delete1 = Driver::where('driver._id',$_id)->first();
        // }
        // $items = collect($delete1->items);
        // $reference_mails = $items->map(function($item){
        
        // });
        
      
        //$delete = User::where('userEmail','=', 'brad@osttbrokerage.com')->first();
              //dd($delete1);
        // if($delete){
        //     $arr = array('status' => 'success', 'message' => 'User deleted successfully.'); 
        //     return json_encode($arr);
        // }
    }  
}

    


