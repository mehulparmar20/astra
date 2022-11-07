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

class UserController extends Controller
{
    public function addUsers(Request $request)
    {
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
            'userLocation' => 'required',
            'userZip' => 'required',
            'userExt' => 'required',
            // 'userTelephone' => 'required|min:11|max:11|numeric',
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

        try{
			$password = sha1($request->userPass);
			// $company_name = explode(")",$users->getCompanyName()); 
            // if($makedecision['status']) {
                // print_r($request->userPass);die;
                if (User::create([
                    'counter' => 0,
                    // 'companyID' => (int)$_SESSION['companyId'],
                    'userEmail' => $request->input('userEmail'),
                    'companyName' => $request->input('companyName'),
                    'userName' => $request->input('userName'),
                    'userPass' => $password,
                    'userFirstName' => $request->input('userFirstName'),
                    'userLastName' => $request->input('userLastName'),
                    'userAddress' => $request->input('userAddress'),
                    'userLocation' => $request->input('userLocation'),
                    'userZip' => $request->input('userZip'),
                    'userTelephone' => $request->input('userTelephone'),
                    'userExt' => $request->input('userExt'),
                    'TollFree' => $request->input('TollFree'),
                    'userFax' => $request->input('userFax'),
                    // 'privilege' => (object)array(
                    //     'insertUser' => $request->input('insertUser'),
                    //     'updateUser' => $request->input('updateUser'),
                    //     'deleteUser' => $request->input('deleteUser'),
                    //     'importUser' => $request->input('importUser'),
                    //     'exportUser' => $request->input('exportUser'),
                    // ),
                    'dashboard' => (object)array(
                        'profit_loss' => $request->input('profit_loss'),
                        'dispatcher' => $request->input('dispatcher'),
                        'driver' => $request->input('driver'),
                        'company' => $request->input('company'),
                        'truck' => $request->input('truck'),
                        'carrier' => $request->input('carrier'),
                        'equipment' => $request->input('equipment'),
                        'sales_representative' => $request->input('sales_representative'),
                        'new_active_load' => $request->input('new_active_load'),
                    ),
                    'master' => (object)array(
                        // 'master' => $request->input('master'),
                        'addCompany' => $request->input('addCompany'),
                        'paymentTerms' => $request->input('paymentTerms'),
                        'office' => $request->input('office'),
                        'equipmentType' => $request->input('equipmentType'),
                        'truckType' => $request->input('truckType'),
                        'trailerType' => $request->input('trailerType'),
                        'statusType' => $request->input('statusType'),
                        'loadType' => $request->input('loadType'),
                        // 'bankCategory' => $request->input('bankCategory'),
                        'addNote' => $request->input('addNote'),
                        'currencySetting' => $request->input('currencySetting'),
                        'fixPayCategory' => $request->input('fixPayCategory'),
                        'fuelCardType' => $request->input('fuelCardType'),
                        'dispactherIncentive' =>  $request->input('dispactherIncentive'),
                        'salesIncentive' =>  $request->input('salesIncentive'),
                        'documentType' => $request->input('documentType')
                    ),
                    'admin' => (object)array(
                        // 'admin' => $request->input('admin'),
                        'addCustomer' => $request->input('addCustomer'),
                        'addShipper' => $request->input('addShipper'),
                        'addBank' => $request->input('addBank'),
                        'addConsignee' => $request->input('addConsignee'),
                        'addDriver' => $request->input('addDriver'),
                        'addTruck' => $request->input('addTruck'),
                        'addTrailer' => $request->input('addTrailer'),
                        // 'addExternalCarrier' => $request->input('addExternalCarrier'),
                        'factoringCompany' => $request->input('factoringCompany'),
                        'customsBroker' => $request->input('customsBroker'),
                        'creditCard' => $request->input('creditCard'),
                        'subCreditCard' => $request->input('subCreditCard'),
                        'users' => $request->input('users'),
                        'iftaCard' => $request->input('iftaCard'),
                    ),
                    'ifta' => (object)array(
                        // 'ifta' => $request->input('ifta'),
                        'fuelReceipt' => $request->input('fuelReceipt'),
                        'addToll' => $request->input('addToll'),
                        'verifyTrip' => $request->input('verifyTrip'),
                        // 'iftaReport' => $request->input('iftaReport'),
                        // 'iftaCard' => $request->input('iftaCard')
                    ),
                    'account' => (object)array(
                        // 'account' => $request->input('account'),
                        'accountManager' => $request->input('accountManager'),
                        'paymentRegistration' => $request->input('paymentRegistration'),
                        'advancePayment' => $request->input('advancePayment'),
                        'manageReceipt' => $request->input('manageReceipt'),
                    ),
                    'reports' => (object)array(
                        // 'report' => $request->input('report'),
                        'creditStateReport' => $request->input('creditStateReport'),
                        'bankStateReport' => $request->input('bankStateReport'),
                        'driverReport' => $request->input('driverReport'),
                        'fuelReport' => $request->input('fuelReport'),
                        'aggingReport' => $request->input('aggingReport'),
                        'tollReport' => $request->input('tollReport'),
                        'receivableReport' => $request->input('receivableReport'),
                        'payableReport' => $request->input('payableReport'),
                        'fuelcardReport' => $request->input('fuelcardReport'),
                        'Report1099'=> $request->input('Report1099'),
                        'emailTrack' => $request->input('emailTrack'),
                        'laneAnalysis' => $request->input('laneAnalysis')
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
            'userLocation' => 'required',
            'userZip' => 'required',
            'userExt' => 'required',
            // 'userTelephone' => 'required|min:11|max:11|numeric',
        ]);

        try{
            $data = User::where('userEmail', $request->email)->first();
            $data->userEmail = $request->userEmail;
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
        $user = User::where('id', '!=', Auth::user()->id)->get();
        return response()->json($user);  
    }

    public function getUser(Request $request){
        $user = Auth::user();
        return view('profile',compact('user'));  
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
            'userLocation' => 'required',
            'userZip' => 'required',
            'userExt' => 'required',
            // 'userTelephone' => 'required|min:11|max:11|numeric',
        ]);
        
            $data = User::where('userEmail', $user->userEmail)->first();
            // print_r($data);die;
            $data->userEmail = $request->userEmail;
            $data->userName = $request->userName;
            $data->userFirstName = $request->userFirstName;
            $data->userLastName = $request->userLastName;
            if(isset($request->userPass)){
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
        $delete = User::where('userEmail', $request->userEmail)->delete();
        if ($delete == 1) {
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

}