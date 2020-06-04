<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;


class DonationController extends Controller{


    public function index(){

        $data['menu']= 6;
        return view('front/donation/index',$data);
    }

}