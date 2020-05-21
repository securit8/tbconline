<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\News;

class newsController extends Controller{

    protected $news;

    public function __construct(News $news){
        $this->news = $news;
    }

    public function index(){

        $data['news'] = $this->news->orderBy('id','desc')->paginate(6);
        $data['menu']= 2;

        return view('front/news/index',$data);

    }

    public function fullstory($id){
        $data['news'] = $this->news->where('id',$id)->first();
        $data['menu']= 2;


        return view('front/news/fullstory',$data);
    }


}
