<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Currency_add;
use App\Models\Payment_terms;
use App\Models\Factoring_company_add;
use Illuminate\Database\Eloquent\Collection;

class CustomerController extends Controller
{
    
    
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

    public function addCustomerCurrency(Request $request){
         //dd($request);
        $companyIDForCustomer=2;

        //$customerAdd = Customer::all();
   
        $companyIDForCurrency=2;
        $totalCurrencyArray=0;
        $getCompanyForCurrency = Currency_add::where('companyID',$companyIDForCurrency)->first();

        if($getCompanyForCurrency){
            $currencyArray=$getCompanyForCurrency->currency;
            $totalCurrencyArray=count($currencyArray)+ 1;
        }
   
        $currencyData[]=array(    
                        '_id' => $totalCurrencyArray,
                        'counter' => 0,
                        'currencyType' => $request->currencyName,
                        'deleteStatus' => '',
                        'deleteUser' => '',
                        'deleteTime' => '',
                        );

            if($getCompanyForCurrency){
                
                Currency_add::where(['companyID' =>$companyIDForCurrency])->update([
                    'counter'=> $totalCurrencyArray,
                    'currency' =>array_merge($currencyData,$currencyArray) ,
                ]);

                $arrCurrency = array('status' => 'success', 'message' => 'Currency added successfully.'); 
                return json_encode($arrCurrency);
            }else{
                try{
                        if(Currency_add::create([
                            // 'companyID' => (int)$_SESSION['companyId'],
                            '_id' => 1,
                            'companyID' => $companyIDForCurrency,
                            'counter' => 1,
                            'currency' => $currencyData,
                        ])) {
                            $arrCurrency = array('status' => 'success', 'message' => 'Currency added successfully.'); 
                            return json_encode($arrCurrency);
                        }
                }
                catch(\Exception $error){
                    return $error->getMessage();
                }
            }

       
    }

    public function getCustomerPaymentTerms(Request $request){
        $companyIDForCustomer=2;
        $customerPaymentterms = Payment_terms::where('companyID',$companyIDForCustomer)->first();
       // dd($customerCurr);
        return response()->json($customerPaymentterms, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

    public function addCustomerPaymentTerms(Request $request){
        //dd($request);
       $companyIDForPaymentTerms=2;

       //$customerAdd = Customer::all();
  
       $companyIDForPaymentTerms=2;
       $totalPaymentTermsArray=0;
       $getCompanyForPaymentTerms = Payment_terms::where('companyID',$companyIDForPaymentTerms)->first();

       if($getCompanyForPaymentTerms){
           $paymentTermsArray=$getCompanyForPaymentTerms->payment;
           $totalPaymentTermsArray=count($paymentTermsArray)+ 1;
       }
  
       $PaymentTermsData[]=array(    
                       '_id' => $totalPaymentTermsArray,
                       'counter' => 0,
                       'paymentTerm' => $request->PaymentTermsName,
                       'created_by' => '',
                       'deleteStatus' => 'No',
                       'deleteUser' => '',
                       'deleteTime' => '',
                       );

           if($getCompanyForPaymentTerms){
               
            Payment_terms::where(['companyID' =>$companyIDForPaymentTerms])->update([
                   'counter'=> $totalPaymentTermsArray,
                   'payment' =>array_merge($PaymentTermsData,$paymentTermsArray) ,
               ]);

               $arrrPaymentTerms = array('status' => 'success', 'message' => 'Currency added successfully.'); 
               return json_encode($arrrPaymentTerms);
           }else{
               try{
                       if(Payment_terms::create([
                           // 'companyID' => (int)$_SESSION['companyId'],
                           '_id' => 1,
                           'companyID' => $companyIDForPaymentTerms,
                           'counter' => 1,
                           'payment' => $PaymentTermsData,
                       ])) {
                           $arrrPaymentTerms = array('status' => 'success', 'message' => 'Currency added successfully.'); 
                           return json_encode($arrrPaymentTerms);
                       }
               }
               catch(\Exception $error){
                   return $error->getMessage();
               }
           }

      
   }

    public function getCustomerBFactoringCompany(Request $request){
        $companyIDForCustomer=2;
        $customerBFactoringCompany = Factoring_company_add::where('companyID',$companyIDForCustomer)->first();
       // dd($customerCurr);
        return response()->json($customerBFactoringCompany, 200, [], JSON_PARTIAL_OUTPUT_ON_ERROR);
    }
    public function addCustomerfactoringCompany(Request $request){
        //dd($request);
       //$companyIDForPaymentTerms=2;

       //$customerAdd = Customer::all();
  
       $companyIDForCustomerfactoring=2;
       $totalCustomerfactoringArray=0;
       $getCompanyForCustomerfactoring = Factoring_company_add::where('companyID',$companyIDForCustomerfactoring)->first();

       if($getCompanyForCustomerfactoring){
           $CustomerfactoringArray=$getCompanyForCustomerfactoring->factoring;
           $totalCustomerfactoringArray=count($CustomerfactoringArray)+ 1;
       }
  
       $CustomerfactoringData[]=array(    
                       '_id' => $totalCustomerfactoringArray,
                       'counter' => 0,
                       
                       'factoringCompanyname' => $request->factoringCompanyName,
                       'address' => $request->factoringCompanyAddress,
                       'location' => $request->factoringCompanyLocation,
                       'zip' => $request->factoringCompanyZip,
                       'primaryContact' => $request->factoringCompanyPrimaryContact,
                       'telephone' => $request->factoringCompanyPrimaryContactTelephone,
                       'extFactoring' => $request->factoringCompanyPrimaryContactExt,
                       'fax' => $request->factoringCompanyFax,

                       'tollFree' => $request->factoringTollFree,
                       'email' => $request->factoringCompanyContactEmail,

                       'secondaryContact' => $request->factoringCompanySecondaryContact,
                       'ext' => $request->factoringCompanySecondaryContactExt,
                       'currencySetting' => $request->factoringCompanycurrency,
                       'taxID' => $request->factoringCompanyTaxID,
                       'internalNote' => $request->factoringCompanyInternalNotes,
                        'insertedTime' => '',
                       'insertedUserId' => '',

                       'deleteStatus' => 'No',
                       'deleteUser' => '',
                       'deleteTime' => '',
                       );

           if($getCompanyForCustomerfactoring){
               
            Factoring_company_add::where(['companyID' =>$companyIDForCustomerfactoring])->update([
                   'counter'=> $totalCustomerfactoringArray,
                   'factoring' =>array_merge($CustomerfactoringData,$CustomerfactoringArray) ,
               ]);

               $arrrCustomerfactoring = array('status' => 'success', 'message' => ' added successfully.'); 
               return json_encode($arrrCustomerfactoring);
           }else{
               try{
                       if(Factoring_company_add::create([
                           // 'companyID' => (int)$_SESSION['companyId'],
                           '_id' => 1,
                           'companyID' => $companyIDForCustomerfactoring,
                           'counter' => 1,
                           'factoring' => $CustomerfactoringData,
                       ])) {
                           $arrrCustomerfactoring = array('status' => 'success', 'message' => 'added successfully.'); 
                           return json_encode($arrrCustomerfactoring);
                       }
               }
               catch(\Exception $error){
                   return $error->getMessage();
               }
           }

      
   }

    public function addCustomerData(Request $request){
       // echo "hello";
       //dd($request->all());

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
                        'factoringParent' => '',
                        'federalID' => $request->customerFederalID,
                        'workerComp' => $request->customerWorkerComp,
                        'websiteURL' => $request->customerWebsiteURL  ,
                        'internalNotes' => $request->customerInternalNotes  ,


                        'MC' => $request->customerMc  ,
                        'blacklisted' => $request->customerBlacklisted  ,
                        'numberOninvoice' => $request->customerNumbersonInvoice  ,
                        'asshipper' => $request->customerDuplicateShipper  ,
                        'asconsignee' => $request->customerDuplicateConsignee,

                         'customerRate' => $request->customerCustomerRate  ,
                        'isBroker' => $request->customerIsBroker,
                        'insertedTime' => '' ,
                        'insertedUserId' => '' ,
                        'deleteStatus' => '' ,
                        'deleteUser' => '' ,
                        'deleteTime' => '' ,
                        'averagedays' =>'' ,
                        'totalloads' => '' ,

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
    }
}
