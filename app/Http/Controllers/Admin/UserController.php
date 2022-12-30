<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Mail; 
use Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Auth;
use PDF;

class UserController extends Controller
{
    public function addUsers(Request $request)
    {
        // dd($request->inser_user);
		// $data = $db->companyAdmin->findOne(["_id"=> (int)$_SESSION['companyId']]);
        // $flag = false;
        // $flagfield = '';
        // $totalusers = $data['remainingUser'];
        // $Subscriptionupdate = new Subscriptionupdate();
        // $makedecision = $Subscriptionupdate->entryDecision($db, 'user', '603ce8da39d65c0d19526984', $helper);
	
        // echo $makedecision['status'];

        request()->validate([
            'userName' => 'required',
            'userEmail' => 'required|unique:user',
            'userPass' => 'required',
            'userFirstName' => 'required',
            'userLastName' => 'required',
            'userAddress' => 'required',
            'userZip' => 'numeric|nullable',
            'userExt' => 'numeric|nullable',
        ]);
        //Data::insert($request->all());
        // User::create(['name' => $request->input('name'),
        //     "Information"=>[              
        //         "email" => $request->input('email'),
        //         "comment" => $request->input('comment'),
        //         'website' =>$request->input('website'),
        //         "info" => (object)array( "x" => 203, "y" => 102),
        //         "versions" => array("0.9.7", "0.9.8", "0.9.9")
        //     ]
        // ]);
        if($request->userLocation == null){
            $request->userLocation = '';
        }
        if($request->userZip == null){
            $request->userZip = '';
        }
        if($request->userTelephone == null){
            $request->userTelephone = '';
        }
        if($request->userExt == null){
            $request->userExt = '';
        }
        if($request->TollFree == null){
            $request->TollFree = '';
        }
        if($request->userFax == null){
            $request->userFax = '';
        }

        try{
			$password = sha1($request->userPass);
			// $company_name = explode(")",$users->getCompanyName()); 
            // if($makedecision['status']) {
                // print_r($request->userPass);die;
                if (User::create([
                    'counter' => 0,
                    'companyName' => $request->input('companyName'),
                    // 'companyID' => (int)$_SESSION['companyId'],
                    'userEmail' => $request->input('userEmail'),
                    'companyName' => $request->input('companyName'),
                    'userName' => $request->input('userName'),
                    'userPass' => $password,
                    'userFirstName' => $request->input('userFirstName'),
                    'userLastName' => $request->input('userLastName'),
                    'userAddress' => $request->input('userAddress'),
                    'userLocation' => $request->userLocation,
                    'userZip' => $request->userZip,
                    'userTelephone' => $request->userTelephone,
                    'userExt' => $request->userExt,
                    'TollFree' => $request->TollFree,
                    'userFax' => $request->userFax,
                    'privilege' => (object)array(
                        'insertUser' => $request->inser_user,
                        'updateUser' => $request->update_user,
                        'deleteUser' => $request->delete_user,
                        'importUser' => $request->import_user,
                        'exportUser' => $request->export_user,
                    ),
                    'dashboard' => (object)array(
                        'profit_loss' => (int)$request->input('profit_loss'),
                        'dispatcher' => (int)$request->input('dispatcher'),
                        'driver' => (int)$request->input('driver'),
                        'company' => (int)$request->input('company'),
                        'truck' => (int)$request->input('truck'),
                        'carrier' => (int)$request->input('carrier'),
                        'equipment' => (int)$request->input('equipment'),
                        'sales_representative' => (int)$request->input('sales_representative'),
                        'new_active_load' => (int)$request->input('new_active_load'),
                    ),
                    'master' => (object)array(
                        
                        // 'master' => $request->input('master'),
                        'addCompany' => (int)$request->input('addCompany'),
                        'paymentTerms' => (int)$request->input('paymentTerms'),
                        'office' => (int)$request->input('office'),
                        'equipmentType' => (int)$request->input('equipmentType'),
                        'truckType' => (int)$request->input('truckType'),
                        'trailerType' => (int)$request->input('trailerType'),
                        'statusType' => (int)$request->input('statusType'),
                        'loadType' => (int)$request->input('loadType'),
                        // 'bankCategory' => $request->input('bankCategory'),
                        'addNote' => (int)$request->input('addNote'),
                        'currencySetting' => (int)$request->input('currencySetting'),
                        'fixPayCategory' => (int)$request->input('fixPayCategory'),
                        'fuelCardType' => (int)$request->input('fuelCardType'),
                        'dispactherIncentive' =>  (int)$request->input('dispactherIncentive'),
                        'salesIncentive' =>  (int)$request->input('salesIncentive'),
                        'documentType' => (int)$request->input('documentType')
                    ),
                    'admin' => (object)array(
                        'admin' => $request->admin,
                        'customer'=>$request->customer,
                        'shipper'=>$request->addShipper,
                        'consignee' =>$request->addConsignee,
                        'external_carrier'=>$request->external_carrier,
                        'driver_owner_operator'=>$request->driver_owner_operator,
                        'user'=>$request->user,
                        'truck'=>$request->truck,
                        'trailer'=>$request->trailer,
                        'factoring_Company'=>$request->factoringCompany,
                        // 'addCustomer' => (int)$request->input('addCustomer'),
                        // 'addShipper' => (int)$request->input('addShipper'),
                        // 'addBank' => (int)$request->input('addBank'),
                        // 'addConsignee' => (int)$request->input('addConsignee'),
                        // 'addDriver' => (int)$request->input('addDriver'),
                        // 'addTruck' => (int)$request->input('addTruck'),
                        // 'addTrailer' => (int)$request->input('addTrailer'),
                        // // 'addExternalCarrier' => $request->input('addExternalCarrier'),
                        // 'factoringCompany' => (int)$request->input('factoringCompany'),
                        // 'customsBroker' => (int)$request->input('customsBroker'),
                        // 'creditCard' => (int)$request->input('creditCard'),
                        // 'subCreditCard' => (int)$request->input('subCreditCard'),
                        // 'users' => (int)$request->input('users'),
                        // 'iftaCard' => (int)$request->input('iftaCard'),
                    ),
                    'ifta' => (object)array(
                        'ifta'=>$request->ifta,
                        'fuel_vendor'=>$request->fuel_vendor,
                        'iftaCard' => $request->iftaCard,
                        'Fuel_reciepts_cash_advance' => $request->Fuel_reciepts_cash_advance,
                        'tolls'=>$request->tolls,
                        'IFTA_trips'=>$request->IFTA_trips,
                        // 'ifta' => $request->input('ifta'),
                        // 'fuelReceipt' => (int)$request->input('fuelReceipt'),
                        // 'addToll' => (int)$request->input('addToll'),
                        // 'verifyTrip' => (int)$request->input('verifyTrip'),
                        // 'iftaReport' => $request->input('iftaReport'),
                    ),
                    'account' => (object)array(
                        'Finance'=>$request->Finance,
                        'bank'=>$request->bank,
                        'accountManager'=>$request->accountManager,
                        'paymentRegistration'=>$request->paymentRegistration,
                        'sub_credit_card'=>$request->advancePayment,
                        'credit_card'=>$request->manageReceipt,
                        // // 'account' => $request->input('account'),
                        // 'accountManager' => (int)$request->input('accountManager'),
                        // 'paymentRegistration' => (int)$request->input('paymentRegistration'),
                        // 'advancePayment' => (int)$request->input('advancePayment'),
                        // 'manageReceipt' => (int)$request->input('manageReceipt'),
                    ),
                    'reports' => (object)array(
                        'report' => $request->report,
                        'aggingReport'=>$request->aggingReport,
                        'Report1099'=>$request->Report1099,
                        'Expense_report'=>$request->Expense_report,
                        'Revenue_report'=>$request->Revenue_report,
                        // 'creditStateReport' => (int)$request->input('creditStateReport'),
                        // 'bankStateReport' => (int)$request->input('bankStateReport'),
                        // 'driverReport' => (int)$request->input('driverReport'),
                        // 'fuelReport' => (int)$request->input('fuelReport'),
                        // 'aggingReport' => (int)$request->input('aggingReport'),
                        // 'tollReport' => (int)$request->input('tollReport'),
                        // 'receivableReport' => (int)$request->input('receivableReport'),
                        // 'payableReport' => (int)$request->input('payableReport'),
                        // 'fuelcardReport' => (int)$request->input('fuelcardReport'),
                        // 'Report1099'=> (int)$request->input('Report1099'),
                        // 'emailTrack' => (int)$request->input('emailTrack'),
                        // 'laneAnalysis' => (int)$request->input('laneAnalysis')
                    ),
                    'user_type' => "user",
                    // 'insertedTime' => Carbon::now(),
                    // 'insertedUserId' => $_SESSION['userName'],
                    'deleteStatus' => 0,
                    'mode' => 'day',
                    'otp' => '',
                    'emailVerificationStatus' => 1,
                    ])
                    // $decrese_user = $totalusers - 1;
                    // if ($db->companyAdmin->updateOne(['_id' => (int)$_SESSION['companyId']], ['$set' => ['remainingUser' => $decrese_user]])) {
                    //     if ($helper->decrementSubscriptionCounter($db, 'user', '603ce8da39d65c0d19526984', $makedecision['flagfield'])) {
                    //         // Sent Email to user with Login Email and  Password
                    //             $email = $this->getUserEmail();
                    //             $mail = $obj->set_mail();
                    //             $template = $obj->get_mailTemplate('welcomeuser');
                    //             $name = $users->getUserFirstName() . " " . $users->getUserLastName();
                    //             $mail->setFrom('noreply@windsondispatch.com', 'Windson Dispatch');
                    //             $mail->addAddress($email);
                    //             $mail->isHTML(true); // Set email format to HTML
                    //             $mail->Subject = 'Alert From Windson Dispatch';
                    //             $template = str_replace("@name@", $name, $template);
                    //             $template = str_replace("@email@", $email, $template);
                    //             $template = str_replace("@password@", $users->getUserPass(), $template);
                    //             $mail->Body = $template;
                    //             if($mail->send()){     
                                    
                    //             }else{
                    //                 // echo 'Fail'.$mail->ErrorInfo;
                    //             }
                    //     }
                    // }
                ){
                        $success = true;
                        $message = "User added successfully";
                    } else {
                        $success = false;
                        $message = "User not added. Please try again";
                    }
            
                    //  Return response
                    return response()->json([
                        'success' => $success,
                        'message' => $message,
                    ]);
                
                // else {
                //     $arr = array('status' => 'error', 'message' => 'Something went wrong. please try again later.'); 
                //     echo json_encode($arr);
                // }
            // } else {
            //     $arr = $_SESSION['subscription'] == 1 ? array('status' => 'excceed', 'message' => '') : array('status' => 'notsubscribe', 'message' => ''); 
            //     echo json_encode($arr);
            // }
        }
        catch(\Exception $error){
            return $error->getMessage();
        }
    }

    // update Privilege
    public function userEditDetails(Request $request)
    {
        request()->validate([
            'userName' => 'required',
            'userEmail' => 'required|unique:user,userEmail'.$request->email,
            'userFirstName' => 'required',
            'userLastName' => 'required',
            'userAddress' => 'required',
            'userZip' => 'numeric|nullable',
            'userExt' => 'numeric|nullable',
        ]);
        if($request->userLocation == null){
            $request->userLocation = '';
        }
        if($request->userZip == null){
            $request->userZip = '';
        }
        if($request->userTelephone == null){
            $request->userTelephone = '';
        }
        if($request->userExt == null){
            $request->userExt = '';
        }
        if($request->TollFree == null){
            $request->TollFree = '';
        }
        if($request->userFax == null){
            $request->userFax = '';
        }
        try{
            $data = User::where('userEmail', $request->email)->first();
            $data->userEmail = $request->userEmail;
            // dd($request->userPassword);
            if($request->userPassword != null){
                $data->userPass = sha1($request->userPassword);
            }
            $data->companyName = $request->companyName;
            $data->userName = $request->userName;
            $data->userFirstName = $request->userFirstName;
            $data->userLastName = $request->userLastName;
            $data->userAddress = $request->userAddress;
            $data->userLocation = $request->userLocation;
            $data->userZip = $request->userZip;
            $data->userTelephone = $request->userTelephone;
            $data->userExt = $request->userExt;
            $data->TollFree = $request->TollFree;
            $data->userFax = $request->userFax;
            $data->save();
        if($data){
            $arr = array('status' => 'success', 'message' => 'User edited successfully.','statusCode' => 200); 
            return json_encode($arr);
        }
        }
        catch(\Exception $error){
            return $error->getMessage();
        }
    }

    // update Privilege
    public function editUser($users, $db)
    {
        
        $db->user->updateOne(["_id" => (int)$users->getId(),],
            [ '$set' =>[
                'privilege' => array(
                    'insertUser' => $users->getInsertUser(),
                    'updateUser' => $users->getUpdateUser(),
                    'deleteUser' => $users->getDeleteUser(),
                    'importUser' => $users->getImportUser(),
                    'exportUser' => $users->getExportUser(),
                ),
                'dashboard' => array(
                    'profit_loss' => $users->getProfit_loss(),
                    'dispatcher' => $users->getDispatcher(),
                    'driver' => $users->getDriver(),
                    'company' => $users->getCompany(),
                    'truck' => $users->getTruck(),
                    'carrier' => $users->getCarrier(),
                    'equipment' => $users->getEquipment(),
                    'sales_representative' => $users->getSales_rep(),
                    'new_active_load' => $users->getNewactiveload(),
                ),
                'master' => array(
                    'master' => $users->getMaster(),
                    'addCompany' => $users->getAddCompany(),
                    'paymentTerms' => $users->getPaymentTerms(),
                    'office' => $users->getOffice(),
                    'equipmentType' => $users->getEquipmentType(),
                    'truckType' => $users->getTruckType(),
                    'trailerType' => $users->getTrailerType(),
                    'statusType' => $users->getStatusType(),
                    'loadType' => $users->getLoadType(),
                    'bankCategory' => $users->getBankCategory(),
                    'addNote' => $users->getAddNote(),
                    'currencySetting' => $users->getCurrencySetting(),
                    'fixPayCategory' => $users->getFixPayCategory(),
                    'fuelCardType' => $users->getFuelCardType(),
                    'dispactherIncentive' =>  $users->getDispactherIncentive(),
                    'salesIncentive' =>  $users->getSalesIncentive(),
                    'dispactherIncentive' => $users->getDispactherIncentive(),
                    'documentType' =>  $users->getDocumentType()
                ),
                'admin' => array(
                    'admin' => $users->getAdmin(),
                    'addCustomer' => $users->getAddCustomer(),
                    'addShipper' => $users->getAddShipper(),
                    'addBank' => $users->getAddBank(),
                    'addConsignee' => $users->getAddConsignee(),
                    'addDriver' => $users->getAddDriver(),
                    'addTruck' => $users->getAddTruck(),
                    'addTrailer' => $users->getAddTrailer(),
                    'addExternalCarrier' => $users->getAddExternalCarrier(),
                    'factoringCompany' => $users->getFactoringCompany(),
                    'customsBroker' => $users->getCustomsBroker(),
                    'creditCard' => $users->getCreditCard(),
                    'subCreditCard' => $users->getSubCreditCard(),
                    'users' => $users->getUsers(),
                ),
                'ifta' => array(
                    'ifta' => $users->getIfta(),
                    'fuelReceipt' => $users->getFuelReceipt(),
                    'addToll' => $users->getAddToll(),
                    'verifyTrip' => $users->getVerifyTreep(),
                    'iftaReport' => $users->getIftaReport(),
                    'iftaCard' => $users->getIftacard()
                ),
                'account' => array(
                    'account' => $users->getAccount(),
                    'accountManager' => $users->getAccountManager(),
                    'paymentRegistration' => $users->getPaymentRegistration(),
                    'advancePayment' => $users->getAdvancePayment(),
                    'manageReceipt' => $users->getManageReceipt(),
                ),
                'reports' => array(
                    'report' => $users->getReport(),
                    'creditStateReport' => $users->getCreditStateReport(),
                    'bankStateReport' => $users->getBankStateReport(),
                    'driverReport' => $users->getDriverReport(),
                    'fuelReport' => $users->getFuelReport(),
                    'aggingReport' => $users->getAggingReport(),
                    'tollReport' => $users->getTollReport(),
                    'receivableReport' => $users->getReceivableReport(),
                    'payableReport' => $users->getPayableReport(),
                    'fuelcardReport' => $users->getFuelcardReport(),
                    'Report1099'=> $users->getReport1099(),
                    'emailTrack' => $users->getEmailTrack(),
                    'laneAnalysis' => $users->getLaneAnalysis()
                ),
                'user_type' => "user",
                'updateTime' => time(),]
            ]);

        echo 'success';

    }

    // public function changeTheme($db,$theme,$userid){
    //     $mongo = $db->user->updateOne(['companyID' => (int)$_SESSION['companyId'], '_id' => (int)$userid],
    //         ['$set' => ['mode' => $theme]]
    //     );
    //     if($mongo){
    //         $data = $db->user->findOne(['_id' => (int)$userid]);
    //         $company = $db->companyAdmin->findOne(['_id' => (int)$_SESSION['companyId']]);
    //         $companydata = $db->User_Subscription->findOne(['companyID' => (int)$_SESSION['companyId']]);
    //         $obj = new AuthJWT();
    //         $values['company'] = 'user';
    //         $values['authtoken'] = $token;
    //         $values['onetimeid'] = $onetimeid;
    //         $values['companyName'] = $data['companyName'];
    //         $values['userName'] = $data['userFirstName']." ".$data['userLastName'];
    //         $values['userId'] = $data['_id'];
    //         $values['companyId'] = $data['companyID'];
    //         $values['companyPass'] = $data['userPass'];
    //         $values['adminname'] = $data['userFirstName']. " " .$data['userLastName'];
    //         $values['theme'] = $data['mode'];
    //         $values['lock'] = 'unset';
    //         $values['user_type'] = $data['user_type'];
    //         $values['companylogo'] = $company['logo']['filepath'];
    //         if(isset($data['dashboard'])) {
    //             $values['dashboard'] = json_encode($data['dashboard']);
    //         }
    //         $values['privilege'] = json_encode($data['privilege']);
    //         $values['master'] = json_encode($data['master']);
    //         $values['reports'] = json_encode($data['reports']);
    //         $values['admin'] = json_encode($data['admin']);
    //         $values['ifta'] = json_encode($data['ifta']);
    //         $values['account'] = json_encode($data['account']);
    //         $values['expiry'] = json_encode($companydata['subscription_end']);
    //         $values['stripe_id'] = $companydata['stripeID'];
    //         $values['plan'] = $companydata['planType'];
    //         $values['subscription'] = $companydata['subscription'];
    //         $jwtres = $obj->setJWT($values);
    //         $token = $jwtres['jwt'];
    //         $randomId = rand(100000,999999);
    //         $_SESSION['logid'] = $randomId;
    //         $onetimeid = $obj->setRandomid($randomId);
    //         $extime = time() + (21600);
    //         setcookie('__wid', $token, $extime, '', '', true, true);
    //         echo 'success';
    //     }else{
    //         echo 'failed to update';
    //     }
    //     $_SESSION['theme'] = $theme;
    // }

    public function getAllUser(Request $request){
        // $user = User::all();
        $user = User::where('id', '!=', Auth::user()->id)->where('deleteStatus',0)->get();
        return response()->json($user);  
    }

    public function getUser(Request $request){
        $user = Auth::user();
        return view('layout.user.profile',compact('user'));  
    }

    public function editUserDetails(Request $request)
    {
        $user = Auth::user();
        request()->validate([
            'userName' => 'required',
            'userEmail' => 'required|unique:user,userEmail'.$request->userEmail,
            'userFirstName' => 'required',
            'userLastName' => 'required',
            'userAddress' => 'required',
            'userZip' => 'numeric|nullable',
            'userExt' => 'numeric|nullable',
        ]);
        
            $data = User::where('userEmail', $user->userEmail)->first();
            // print_r($data);die;
            $data->userEmail = $request->userEmail;
            $data->userName = $request->userName;
            $data->userFirstName = $request->userFirstName;
            $data->userLastName = $request->userLastName;
            if($request->userPass != null){
                $data->userPass = sha1($request->userPass);
            }else{
                $data->userPass = $user->userPass;
            }
            $data->userAddress = $request->userAddress;
            $data->userLocation = $request->userLocation;
            $data->userZip = $request->userZip;
            $data->userTelephone = $request->userTelephone;
            $data->userExt = $request->userExt;
            $data->TollFree = $request->TollFree;
            $data->userFax = $request->userFax;
            
        if($data->save()){
          return redirect()->back()->with('message','Profile Edited Successfully!');
        }else{
          return redirect()->back()->with('message','Something went wrong!');
        }
        
    }

    public function deleteUser(Request $request)
    {
        $delete = User::where('userEmail', $request->userEmail)->update(['deleteStatus'=>1]);
        if ($delete) {
            $success = true;
            $message = "User deleted successfully";
        } else {
            $success = false;
            $message = "User not found";
        }

        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    public function downloadPDF()
    {
        $users = User::get();

        $pdf = PDF::loadView('pdf.usersdetails', array('users' =>  $users))->setPaper('a4', 'landscape');
        

        return $pdf->download('Users.pdf');   
    }


}