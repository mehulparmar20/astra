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

class CompanyController extends Controller
{
    public function getCompanyData(Request $request){
        $company = Company::all();
        
        return response()->json($company);  
    }

    public function addCompanyData(Request $request){
        request()->validate([
            'companyName' => 'required',
            'telephoneNo' => 'required',
            'companyID' => 'required|unique:company,companyID',
        ]);
        try{

        $company=Company::all();
        $companyID=(int)$request->companyID;

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
                        // 'status' => $request->status,
                        'deleteStatus' => "NO",
                        'deleteTime' => "",
                        'deleteUser' => "",
                        'factoringParent' => $request->factoringParent,
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
}
