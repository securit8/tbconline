<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;


class DonationController extends Controller{


    public function index(){

        $data['menu']= 3;
        return view('front/donation/index',$data);
    }

    public function fullstory(){
      $data['menu']= 3;
      return view('front/donation/fullStory',$data);
    }

    public function baxmaro(){
      $data['menu']= 3;
      return view('front/donation/baxmaro',$data);
    }
    public function racha(){
      $data['menu']= 3;
      return view('front/donation/racha',$data);
    }
    public function svaneti(){
      $data['menu']= 3;
      return view('front/donation/svaneti',$data);
    }
}
