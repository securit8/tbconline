<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Text;

class AboutController extends Controller{

    protected $text;

    public function __construct(Text $text){
        $this->text = $text;
    }

    public function index(){

        $data['about'] = $this->text->orderBy('id','desc')->get();
        $data['menu']= 5;


        return view('front/about/index',$data);
    }



}
