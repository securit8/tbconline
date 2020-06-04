<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests\CreateVideo;

use App\Video;

class VideoController extends Controller{

    protected $video;

    public function __construct(Video $video){
        $this->video = $video;
    }
    
    public function index(){
        $videos = $this->video->orderBy('id','desc')->paginate(6);
        return view('admin/videos/index',['videos' => $videos]);
    }

    public function create(){
        return view('admin/videos/create');
    }

    public function edit($id){
        $video = $this->video->where('id',$id)->first();

        return view('admin/videos/edit',['video'=>$video]);
    }

    public function store(CreateVideo $request){
        
        $en_name = $request->get('en')['name'] ? $request->get('en')['name'] : "";
        $request->merge(['en'=>[
            'name' => $en_name
        ]]);

        $video = $this->video;
        $video->link = $request->link;
        $video->fill($request->only(['ka','en']));
        $video->save();


        return back()->with('success','ჩანაწერი წარმატებით დაემატა ვიდეო გალერეას!');
    }

    public function update(CreateVideo $request,$id){

        $en_name = $request->get('en')['name'] ? $request->get('en')['name'] : "";
        $request->merge(['en'=>[
            'name' => $en_name
        ]]);

        $video = $this->video->where('id',$id)->first();
        $video->link = $request->link;
        $video->deleteTranslations();

        $video->fill($request->only(['en','ka']));

        $video->save();

        return back()->with('success','ჩანაწერი წარმატებით განახლდა!');
    }

    public function delete($id){
        $video = $this->video->where('id',$id)->first();
        $video->delete();

        return back()->with('success','ჩანაწერი წარმატებით წაიშალა!');
    }
}