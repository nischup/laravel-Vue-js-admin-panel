<?php

namespace App\Http\Controllers\CbAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    public function index () {

        return view('backend-file.login');
    }
    public function verify ( Request $request) {

        $email=$request->email;
        $password=$request->password;
         if (Auth::guard('cbadmin')->attempt(['email' => $email, 'password' => $password])) {
            
            return redirect()->intended(route('cbadmin.home.index'));
        }
        else {
            return redirect()->back();
        }

    }

     public function logout () {


   
        if (Auth::guard('cbadmin')->check()) {
            
            Auth::guard('cbadmin')->logout();

            return redirect()->route('cbadmin.login.index');
        }

      

    }
}
