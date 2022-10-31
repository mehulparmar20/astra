<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Driver;
<<<<<<< HEAD
=======
use App\Models\Currency_add;
use App\Models\Payment_terms;
use App\Models\Factoring_company_add;
>>>>>>> 1fef6bcfcb06c512deeeac3023c29b4982aa907e
use Illuminate\Database\Eloquent\Collection;

class CustomerController extends Controller
{
<<<<<<< HEAD
    public function getCustomerData(Request $request){
        $customer1 = Customer::all();
        return response()->json($customer1, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
=======
    
    
    public function getCustomerData(Request $request){
        $customer = Customer::all();
        return response()->json($customer, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

    public function getCustomerCurrency(Request $request){
        $companyIDForCustomer=2;
        $customerCurr = Currency_add::where('companyID',$companyIDForCustomer)->first();
       // dd($customerCurr);
        return response()->json($customerCurr, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

    public function getCustomerPaymentTerms(Request $request){
        $companyIDForCustomer=2;
        $customerPaymentterms = Payment_terms::where('companyID',$companyIDForCustomer)->first();
       // dd($customerCurr);
        return response()->json($customerPaymentterms, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

    public function getCustomerBFactoringCompany(Request $request){
        $companyIDForCustomer=2;
        $customerBFactoringCompany = Factoring_company_add::where('companyID',$companyIDForCustomer)->first();
       // dd($customerCurr);
        return response()->json($customerBFactoringCompany, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

    public function addCustomerData(Request $request){
       // echo "hello";
       dd($request->all());

        request()->validate([
            //'customerName' => 'required',
            //'customerAddress' => 'required,
            // 'customerLocation' => 'required',
            // 'customerZip' => 'required',
       
        ]);
        
        $customerAdd = Customer::all();
   
        $companyIDForCustomer=2;
        $totalCustomerArray=0;
        $getCompanyForCustomer = Customer::where('companyID',$companyIDForCustomer)->first();

        if($getCompanyForCustomer){
            $CustomerArray=$getCompanyForCustomer->customer;
            $totalCustomerArray=count($CustomerArray)+ 1;
        }
   
       // $password = sha1($request->password);
        $customerData[]=array(    
                        '_id' => $totalCustomerArray ,
                        'counter' => 0,
                        'custName' => $request->customerName,
                        'custAddress' => $request->customerAddress,
                        'custLocation' => $request->customerLocation,
                        'custZip' => $request->customerZip,

                        'billingAddress' => $request->altTelephone,

                        'billingLocation' => $request->customerBillingLocation,
                        'billingZip' => $request->customerBillingZip,
                        'primaryContact' => $request->customerPrimaryContact,
                        'custTelephone' => $request->customerTelephone,
                        'custExt' => $request->customerExt,
                        'custEmail' => $request->customerEmail,
                        'custFax' => $request->customerFax,
                        'billingContact' => $request->customerBillingContact,
                        'billingEmail' => $request->customerBillingEmail,
                        'billingTelephone' => $request->customerBillingTelephone,
                        'billingExt' => $request->customerBillingExt,
                        'URS' => $request->customerUrs,

                        'currencySetting' => $request->customerCurrency,
                        'paymentTerms' => $request->customerPaymentTerm,
                        'creditLimit' => $request->customerCreditLimit,
                        'salesRep' => $request->customerSalesRepresentative,
                        'factoringCompany' => $request->customerFactoringCompanyname,
                        // 'factoringParent' => $request->hazmatExpiry,
                        'federalID' => $request->customerFederalID,
                        'workerComp' => $request->customerWorkerComp,
                        'websiteURL' => $request->customerWebsiteURL  ,
                        'internalNotes' => $request->customerInternalNotes  ,


                        'MC' => $request->customerMc  ,
                        'blacklisted' => $request->customerBlacklisted  ,
                       // 'numberOninvoice' => $request->customerNumbersonInvoice  ,
                        'asshipper' => $request->customerDuplicateShipper  ,
                        'asconsignee' => $request->customerDuplicateConsignee,

                         'customerRate' => $request->customerCustomerRate  ,
                        // 'isBroker' => $request->customerIsBroker,
                        // 'insertedTime' => $request->driverBalance,
                        // 'insertedUserId' => $request->terminationDate,
                        // 'deleteStatus' => $request->internalNotes,
                        // 'deleteUser' => $request->userLocation,
                        // 'deleteTime' => $request->userTelephone,
                        // 'averagedays' => $request->  ,
                        // 'totalloads' => $request->  ,

                        );
   // dd($getCompany);         
   // $getCompany="";
           
            if($getCompanyForCustomer){
                
                // $CustomerArray=$getCompanyForCustomer->customer;
                // $totalCustomerArray=count($CustomerArray);
               // dd($totalCustomerArray);
                Customer::where(['companyID' =>$companyIDForCustomer])->update([
                    'counter'=> $totalCustomerArray,
                    'customer' =>array_merge($customerData,$CustomerArray) ,
                    // 'user_type' => "user",
        
                    // 'deleteStatus' => 0,
                    // 'mode' => 'day',
                    // 'otp' => '',
                    // 'emailVerificationStatus' => 1,
                    
                ]);

                $arrCustome = array('status' => 'success', 'message' => 'Customer added successfully.'); 
                return json_encode($arrCustome);
            }else{
                // echo "o";
                try{
                   
                        if(Customer::create([
                            
                            // 'companyID' => (int)$_SESSION['companyId'],
                            '_id' => 1,
                            'companyID' => $companyIDForCustomer,
                            'counter' => 1,
                            'customer' => $customerData,
                            // 'user_type' => "user",
                            // 'deleteStatus' => 0,
                            // 'mode' => 'day',
                            // 'otp' => '',
                            // 'emailVerificationStatus' => 1,
                            
                        ])) {
                            $arrCustome = array('status' => 'success', 'message' => 'driver added successfully.'); 
                            return json_encode($arrCustome);
                        }
                }
                catch(\Exception $error){
                    return $error->getMessage();
                }
            }

        


        // $customer1 = Customer::all();
        // return response()->json($customer1, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
>>>>>>> 1fef6bcfcb06c512deeeac3023c29b4982aa907e
    }
}
