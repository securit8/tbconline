<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Contributor;

class ContributorsController extends Controller{
    protected $contributor;

    public function __construct(Contributor $contributor){
        $this->contributor = $contributor;
    }

    public function index(){



        $data['persons'] = $this->contributor->where('type','0')->get();
        $data['companies'] = $this->contributor->where('type','1')->get();

        foreach($data['persons'] as $persons){

            if(count($persons->images))
                $images[$persons->id] = $persons->images()->first()->location;
        }

        foreach($data['companies'] as $companies){
            
            if(count($companies->images))
                $images[$companies->id] = $companies->images()->first()->location;
        }

            $data['images'] = isset($images) ? $images : null;
            $data['menu']= 4;


        //dd($images);

        return view('front/contributors/index',$data);
    }
}