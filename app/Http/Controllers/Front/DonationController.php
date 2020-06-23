<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\products;
use DB;
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

      //dd($product[0]);
      $data['menu']= 3;


      //dd($this->productsid);
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

    public function vianotour(){
      $data['menu']= 3;
      $product=DB::table('products')->pluck('price');
      $data['kaxeti_price']=$product[0];
      $data['yazbegi_price']=$product[1];
      $data['ajara_price']=$product[2];
      return view('front/donation/vianotour',$data);
    }
}
