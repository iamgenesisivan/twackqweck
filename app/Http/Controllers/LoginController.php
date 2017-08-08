<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Models\Employee;
use App\Models\User;
use App\Models\AuditTrail;
use Request;
use Alert;
use Auth;
use Hash;
use Carbon;

class LoginController extends Controller
{
    
    public function addUser(){
    
    }

    public function addAdmin(){
      $addAdmin = Request::all();
      $exists = User::all()->count();
      if($exists != 0){
        return response()->json(["error" => "yes"]);
      }else{
        $user = new User;
        $user['id'] = '0';
        $user['emp_id'] = 'X1J3Y17';
        $user['username'] = 'Admin';
        $user['email'] = $addAdmin['email'];
        $user['password'] = md5($addAdmin['password']);
        $user['user_type'] = 'Super Admin';
        $user['remember_token'] = $addAdmin['_token'];
        $user->save();            
        return response()->json(["success" => "yes"]);
        // return redirect('login');
      }
    }

    public function login(){
        return view('main.login');
    }

    public function loggedIn(){
        $userInfo = User::all();
        $loggedInCreds = Request::only('email', 'password');
        $user = User::where('email', '=', $loggedInCreds['email'])->first();
        $user2 = User::where('username', '=', $loggedInCreds['email'])->first();
        if(User::where('email', '=', $loggedInCreds['email'])->exists()){

            if($user['email'] == $loggedInCreds['email'] AND $user['password'] == md5($loggedInCreds['password'])){

                Auth::login($user);
                $audit_trail = new AuditTrail;
                $audit_trail['user_id'] = Auth::user()->emp_id;
                $audit_trail['email'] = Auth::user()->email;
                $audit_trail['action'] = "Logged-in";
                $audit_trail['user_role'] = Auth::user()->user_type;
                $audit_trail->save();
                  if(Auth::user()->user_type == "Admin" || Auth::user()->user_type == "Super Admin"){
                      return Redirect::route('dashboard');
                  }
                  else{
                      return Redirect::route('profile');
                  }
            }
            else if($user['password'] != md5($loggedInCreds['password']) || $user2['password'] != md5($loggedInCreds['password'])){
                Alert::message("", "Password mismatch!", "error"); 
                return redirect('login');
            }
        }
        else if(User::where('username', '=', $loggedInCreds['email'])->exists()){

            if($user2['username'] == $loggedInCreds['email'] AND $user2['password'] == md5($loggedInCreds['password'])){

                Auth::login($user2);
                $audit_trail = new AuditTrail;
                $audit_trail['user_id'] = Auth::user()->emp_id;
                $audit_trail['email'] = Auth::user()->email;
                $audit_trail['action'] = "Logged-in";
                $audit_trail['user_role'] = Auth::user()->user_type;
                $audit_trail->save();
                  if(Auth::user()->user_type == "Admin" || Auth::user()->user_type == "Super Admin"){
                      return Redirect::route('dashboard');
                  }
                  else{
                      return Redirect::route('profile');
                  }
            }
            else if($user2['password'] != md5($loggedInCreds['password'])){

                Alert::message("", "Password mismatch!", "error"); 
                return redirect('login');
            }
        }
        else
        {
            Alert::message("", "User not found!", "error");  
           return redirect('login');
        }
        
    }

    public function loggedOut()
    {
        $audit_trail = new AuditTrail;
        $audit_trail['user_id'] = Auth::user()->emp_id;
        $audit_trail['action'] = "Logged-out";
        $audit_trail['user_role'] = Auth::user()->user_type;
        $audit_trail->save();
        Auth::logout();
        Alert::message("", "Successfully logged out", "success"); 
        return redirect('login');
    }

}
