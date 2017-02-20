<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\Session;
class AuthenticateUserController extends Controller
{
    //

    public function checkLogin(LoginRequest $request){

    	 $credentials=$request->all();
        $email=$credentials['email'];
        $password=$credentials['password'];

        if (Auth::attempt(['email' => $email, 'password' => $password , 'status'=>'active'])) {
           
            return redirect('/admin/dashboard');
        }
        else{
        	
            Session()->flash('error', 'Login Credentials didnot Matched.');
            return redirect('/admin/login');
        }

    }
    public function checkLogout(){
    	Auth::logout();
		Session::flush();
		return redirect('/admin/login');

    }
}
