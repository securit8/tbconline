<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Video;


class VideoController extends Controller{

    protected $video;

    public function __construct(Video $video){
        $this->video = $video;
    }

    public function index(){
        
        $data['videos'] = $this->video->orderBy('id','desc')->paginate(12);
        $data['menu']= 7;


        //dd($data['videos']);

        return view('front/videos/index',$data);
    }

}