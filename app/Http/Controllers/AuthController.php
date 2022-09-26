<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect('admin/dashboard');
        }
        return view('login');
    }  



    // public function login(Request $request)
    // {
    //   $this->validate($request, [
    //             'username' => 'required|max:255',
    //             'password' => 'required|max:255'
    //   ]);
    
    //   $authUser = User::where('usrName', $request->username)->first();
    
    //   if (isset($authUser)) {
    //             $password = md5('aFGQ475SDsdfsaf2342' . $request->password . $authUser->usrPasswordSalt);
    
    //    if (Auth::attempt([$this->username() => $request->username, 'password' => $password])) {
    //              return 'logged in successfully : '.$this->username() . ' - ' . $password;
    //             }
    //    else {
    //          return 'oops something happend : '.$this->username() . ' - ' . $password;
    //          }
    //   }




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
  
        return redirect("login")->with('message','Oppes! You have entered invalid credentials');
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}