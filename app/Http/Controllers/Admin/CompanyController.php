<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Mail; 
use Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Auth;
use PDF;
use MongoDB\BSON\ObjectId;
use Image;

class CompanyController extends Controller
{
    public function getCompanyData(Request $request){
        $company = Company::where('companyID',1)->get();
        
        return response()->json($company);  
    }

    public function addCompanyData(Request $request){
        request()->validate([
            'companyName' => 'required',
            'telephoneNo' => 'required',
            'mailingAddress' => 'required|unique:company,company.mailingAddress',
            'companyID' => 'required|unique:company,companyID',
            // 'file' => 'image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
        try{

        $company=Company::all();
        $companyID=(int)$request->companyID;

        // if($request->file){
        //     $image = $request->file('file');
        //     $input['file'] = time().'.'.$image->getClientOriginalExtension();
        //     $destinationPath = public_path('/thumbnail');
        //     $imgFile = Image::make($image->getRealPath());
        //     $imgFile->resize(150, 150, function ($constraint) {
        //         $constraint->aspectRatio();
        //     })->save($destinationPath.'/'.$input['file']);
        //     $destinationPath = public_path('/uploads');
        //     $image->move($destinationPath, $input['file']);
        // }

        $getCompany = Company::where('companyID',$companyID)->first();
        $companyData[]=array(    
                        '_id' => new ObjectId(),
                        'companyName' => $request->companyName,
                        'shippingAddress' => $request->shippingAddress,                        
                        'telephoneNo' => $request->telephoneNo,
                        'faxNo' => $request->faxNo,
                        'mcNo' => $request->mcNo,
                        'usDotNo' => $request->usDotNo,
                        'mailingAddress' => $request->mailingAddress,
                        'factoringCompany' => $request->factoringCompany,
                        'website' => $request->website,
                        'counter' => 0,
                        'file' => $request->file,
                        // 'edit_by' => $request->edit_by,
                        // 'edit_time' => $request->edit_time,
                        'status' => "No",
                        'deleteStatus' => "NO",
                        'deleteTime' => "",
                        'deleteUser' => "",
                        'factoringParent' => (int)$request->factoringParent,
            );

            if($getCompany){
                $companyArray=$getCompany->company;
                Company::where(['companyID' =>$companyID ])->update([
                    'company' =>array_merge($companyData,$companyArray) 
                ]);

                $data = [
                    'success' => true,
                    'message'=> 'Company added successfully'
                ] ;
                
                return response()->json($data);
            }else{
                if(Company::create([
                    '_id' => 10,
                    'companyID' => $companyID,
                    'counter' => 0,
                    'company' => $companyData,
                    // 'user_type' => "user",
                    'deleteStatus' => 0,
                    // 'mode' => 'day',
                    // 'otp' => '',
                    // 'emailVerificationStatus' => 1,
                    
                ])) {
                    $data = [
                        'success' => true,
                        'message'=> 'Company added successfully'
                        ] ;
                        return response()->json($data);
                }
            }
        } 
        catch(\Exception $error){
            return $error->getMessage();
        }
    }

    public function editCompanyData(Request $request){
        $companyID=(int)$request->com_id;
        // $companySubId=$request->companySubId;
        $email=$request->email;
        $result = Company::where('companyID',$companyID )->first();
        $companyArray=$result->company;

        $arrayLength=count($companyArray);
       // dd($arrayLength);
        $i=0;
        $v=0;
       for ($i=0; $i<$arrayLength; $i++){
            $id=$result->company[$i];
                foreach ($id as $value){
                    if($value==$email){
                        $v=$i;
                     }
                }
       }
       
       $companyEditData=$result->company[$v];
       return response()->json($companyEditData);  
    }  
//add by Reena
    public function updateCompanyData(Request $request){

        request()->validate([
            'companyName' => 'required',
            'telephoneNo' => 'required',
            'mailingAddress' => 'required|unique:company,company.mailingAddress'.$request->mailingAddress,
            'companyID' => 'required|unique:company,companyID',
            'file' => 'image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $companyIDUp=(int)$request->companyID;
        $email=$request->mailingAddress;

        $resultUp = Company::where('companyID',$companyIDUp )->first();
        $companyArrayUp=$resultUp->company;

        $arrayLengthUp=count($companyArrayUp);
        $i=0;
        $v=0;
       for ($i=0; $i<$arrayLengthUp; $i++){
            $id=$resultUp->company[$i];
                foreach ($id as $value){
                    if($value==$email){
                        $v=$i;
                     }
                }
       }

       $companyArrayUp[$v]['companyName']=$request->companyName;
       $companyArrayUp[$v]['shippingAddress']=$request->shippingAddress;
       $companyArrayUp[$v]['telephoneNo']=$request->telephoneNo;
       $companyArrayUp[$v]['faxNo']=$request->faxNo;
       $companyArrayUp[$v]['mcNo']=$request->mcNo;
       $companyArrayUp[$v]['usDotNo']=$request->usDotNo;
       $companyArrayUp[$v]['mailingAddress']=$request->mailingAddress;
       $companyArrayUp[$v]['website']=$request->updateDriverStatus;
       $companyArrayUp[$v]['factoringCompany']=$request->factoringCompany;

       $resultUp->company = $companyArrayUp;
       if($resultUp->save()){
            $arr = array('status' => 'success', 'message' => 'Company edited successfully.','statusCode' => 200); 
            return json_encode($arr);
        }
    }

    public function deleteCompany(Request $request){
        $companyID=(int)$request->com_id;
        $email=$request->email;
        
        $result = Company::where('companyID',$companyID )->first();
        $companyArray=$result->company;

        $arrayLength=count($companyArray);
        $i=0;
        $v=0;
        for ($i=0; $i<$arrayLength; $i++){
                $id=$result->company[$i];
            
                    foreach ($id as $value){
                        if($value==$email){
                            $v=$i;
                        }
                    }
        }
   
       $companyArray[$v]['deleteStatus'] = "YES"; 
       $result->company = $companyArray;

       if ($result->save()) {
            $success = true;
            $message = "Company deleted successfully";
        } else {
            $success = false;
            $message = "Company not found";
        }

        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
        
    }

}
