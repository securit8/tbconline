<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserloginController extends Controller
{


//    public function __construct()
//    {
//        $this->middleware('guest:userlogin',['exept'=>'userlogout']);
//    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if(Auth::guard('userlogin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){

            return redirect()->intended(route('user.home'));


        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    public function showLoginForm()
    {
        return view('front/login');
    }



    public function userlogout(Request $request){


        Auth::guard('userlogin')->logout();
        $request->session()->invalidate();


        return redirect(route('index'));

    }

}
