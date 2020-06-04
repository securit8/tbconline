<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateScholarship;
use Illuminate\Support\Facades\DB;
use App\Scholarship;
use App\Image as Img;
use App\SVideo;
use Image;

class ScholarshipController extends Controller {

    protected $scholarship;
    protected $image;
    protected $video;

    public function __construct( Scholarship $scholarship, Img $image, SVideo $video ){
        $this->scholarship = $scholarship;
        $this->image = $image;
        $this->video = $video;
    }
    

    public function index(){

        $data['scholarship'] = $this->scholarship->first() ? $this->scholarship->first() : $this->scholarship;

        $data['videos'] = $this->video->take(4)->get();
        
        $images = DB::table('images')->where('imagetable_type','App\Scholarship')->get();

        $data['image'] = count($images) ? $images->first(): null;

        return view('admin/scholarship/index',$data);
    }

    public function update( UpdateScholarship $request){
        
        //dd($request->input());



        while(count(SVideo::all()) < 4){
            $video = new SVideo;
            $video->link = "";
            $video->save();
        }

        $videos = SVideo::take(10)->get();

        $scholarship = $this->scholarship->first() ? $this->scholarship->first() : $this->scholarship;
        
        $scholarship->deleteTranslations();
        $scholarship->fill($request->only(['ka','en','application_form']));

        if($request->hasFile('image')){

            $images = DB::table('images')->where('imagetable_type','App\Scholarship')->get();

            if(count($images)){
                foreach($images as $image){
                    $imgEnd = explode('about/',$image->location);
                    $imgEnd = end($imgEnd);
                    $imgEnd = 'storage/images/scholarship/'.$imgEnd;
                    
                    if(file_exists($imgEnd))
                        unlink($imgEnd);
                    
                    //$image->delete();
                }
                DB::table('images')->where('imagetable_type','App\Scholarship')->delete();
            }

            $pathEnding = time().'.'.$request->file('image')->getClientOriginalExtension();


            // $img = $this->image;
            // $img->location = asset('storage/images/scholarship').'/'.$pathEnding;

            // $scholarship->images()->save($img);

            DB::table('images')->insert([
                'location' => asset('storage/images/scholarship').'/'.$pathEnding,
                'imagetable_type' => 'App\Scholarship',
                'imagetable_id' => 0
            ]);

            Image::make($request->file('image')->getRealPath())->save(public_path().'/storage/images/scholarship'.'/'.$pathEnding);
        }

        if($request->videos)
            foreach($request->videos as $key => $video){
                $videos[$key]->link = $video;
                $videos[$key]->save(); 
            }
        
        
        $scholarship->save();

        return back()->with('success','ცვლილება წარმატებით განხორციელდა!');

    }
}