<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Scholarship;

use App\SVideo;

use App\Student;
use Illuminate\Support\Facades\DB;

class ScholarshipController extends Controller{

    protected $scholarship;
    protected $video;
    protected $student;

    public function __construct(Scholarship $scholarship, SVideo $video, Student $student){
        $this->scholarship = $scholarship;
        $this->video = $video;
        $this->student = $student;
    }

    public function index(){

        $data['videos'] = $this->video->take(4)->get();
        $data['scholarship'] = $this->scholarship->first() ? $this->scholarship->first() : $this->scholarship;

        $images = DB::table('images')->where('imagetable_type','App\Scholarship')->get();

        $data['image'] = count($images) ? $images->first(): null;

        $data['students'] = $this->student->all();

        $data['menu']= 4;

        return view('front/scholarships/index',$data);
    }

}
