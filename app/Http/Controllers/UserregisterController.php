<?php

namespace App\Http\Controllers;


//use App\Http\Controllers\Controller;
use App\userlogins;
use Illuminate\Support\Facades\Validator;


class UserregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('guest:userlogin');
    }
    public function create(array $data)
    {
        //
        return userlogins::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        //
//    }

    /**
     * Display the specified resource.
     *
     * @param  \App\userlogin  $userlogin
     * @return \Illuminate\Http\Response
     */
    public function showregisterForm(){
        return view('front/register');
    }


}
