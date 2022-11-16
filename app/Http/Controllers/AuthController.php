<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;
use App\Models\PasswordReset;
use Mail; 
use Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function login()
    {
        return view('layout.login.login');
    }


    public function postLogin(Request $request)
    {
        $request->validate([
            'userEmail' => 'required',
            'userPass' => 'required',
        ]);
        $email = $request->userEmail;
        $password = $request->userPass;
        $user = User::where(['userEmail'=>$email, 'userPass'=>sha1($password)])->first();
        if($user){
            Auth::login($user);
            return redirect('admin/dashboard')->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->with('message','Opps! You have entered invalid credentials');
    }

    public function dashboard()
    {        
        if(Auth::check()){

            //  --  

            $driverData=\App\Models\Driver::all();

            return view('dashboard',['driverData' => $driverData]);
        }
        
        
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    public function showForgetPasswordForm()
    {
        return view('layout.login.forgot-password');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email|exists:user',
        // ]);

        $email = $request->email;
        $user = User::where('userEmail',$email)->first();

        if($user){
            $token = Str::random(64);
            $password = Str::random(8);
            $shaPassword = sha1($password);
            $updatePassword = User::where('userEmail',$email)->update(['userPass' => $shaPassword]);
            $a = \Mail::send('email.forgot-password', ['password'=>$password], function($message) use($request){
                $message->from('noreply@veravalonline.com');
                $message->to($request->email);
                $message->subject('Reset Password');
            });
            return redirect('login')->with('message', 'We have e-mailed you your new password');
        }     
        return back()->with('message', 'This email does not exist. Please try with a registered email');
    }

}