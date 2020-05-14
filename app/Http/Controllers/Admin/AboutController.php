<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Image;

use App\Image as Img;

use App\Text;

use App\Http\Requests\CreateAbout;

use App\Http\Requests\UpdateAbout;

class AboutController extends Controller{

    protected $image;
    protected $text;

    public function __construct(Img $image,Text $text){
        $this->image = $image;
        $this->text = $text;
    }

    public function index(){

        $texts = $this->text->orderBy('id','desc')->paginate(3);

        app()->setLocale('ka');

        return view('admin/about/index',['texts'=>$texts]);
    }

    public function create(){
        return view('admin/about/create');
    }


    public function store(CreateAbout $request){

        $en_name = $request->get('en')['name'] ? $request->get('en')['name'] : "" ;
        $en_description = $request->get('en')['description'] ? $request->get('en')['description'] : "" ;

        $request->merge(['en'=>[
            'name'=>$en_name,
            'description' => $en_description
        ]]);


        $text = $this->text;

        $text->fill($request->except(['image','_token']));

        $text->save();


        if($request->hasFile('image')){
            if($request->file('image')->isValid()){
                $Image = $this->image;

                $pathEnding = time().'.'.$request->file('image')->getClientOriginalExtension();

                $Image->location = asset('public/images/about').'/'.$pathEnding;

                $text->images()->save($Image);

                Image::make($request->file('image')->getRealPath())->save(public_path().'/images/about'.'/'.$pathEnding);

                return back()->with('success','სურათი და ტექსტი წარმატებით დაემატა!');
            }
            else
                return back()->with('failure','სურათის დამატებისას პრობლემა წარმოიშვა!');
        }

        return back()->with('success','ტექსტი წარმატებით დაემატა!');


    }

    public function deleteText($id){

        $images = $this->text->where('id',$id)->first()->images();

        foreach($images as $image){
            $imgEnd = explode('about/',$image->location);
            $imgEnd = end($imgEnd);
            $imgEnd = 'public/images/about/'.$imgEnd;

            if(file_exists($imgEnd))
                unlink($imgEnd);

            $image->delete();
        }

        $this->text->where('id',$id)->first()->delete();


        return redirect(route('admin.about.index'))->with('success','ჩანაწერი წარმატებით წაიშალა!');
    }


    public function deleteImage($id){
        $img = $this->image->where('id',$id)->first();
        $imgEnd = explode('about/',$img->location);
        $imgEnd = end($imgEnd);
        $imgEnd = 'storage/images/about/'.$imgEnd;

        if(file_exists($imgEnd))
            unlink($imgEnd);

        $img->delete();
        return redirect(route('admin.about.index'));
    }

    public function updateText(UpdateAbout $request, $id){

        $en_name = $request->get('en')['name'] ? $request->get('en')['name'] : "" ;
        $en_description = $request->get('en')['description'] ? $request->get('en')['description'] : "" ;

        $request->merge(['en'=>[
            'name'=>$en_name,
            'description' => $en_description
        ]]);

        $request->validated();

        $text = $this->text->where('id',$id)->first();

        $text->deleteTranslations();

        $text->fill($request->except('_token'))->save();

        $successInfo = 'ტექსტი წარმატებით შეიცვალა!';

        return redirect('/admin/About/'.$text->id.'/edit')->with('success',$successInfo);
    }

    public function editText($id){

        $text = $this->text->where('id',$id)->first();

        return view('admin/about/edit',['text'=>$text]);
    }

    public function addImagePage($id){
        return view('admin/about/addImage',['id'=>$id]);
    }

    public function addImage(Request $request,$id){

        $text = $this->text->where('id',$id)->first();

        if($request->hasFile('image')){
            if($request->file('image')->isValid()){


                $Image = $this->image;

                $pathEnding = time().'.'.$request->file('image')->getClientOriginalExtension();

                $Image->location = asset('public/images/about').'/'.$pathEnding;

                $text->images()->save($Image);

                Image::make($request->file('image')->getRealPath())->save(public_path().'/images/about'.'/'.$pathEnding);

                return redirect(route('admin.about.index'))->with('success','სურათი წარმატებით დაემატა!');
            }
            else
                return redirect(route('admin.about.index'))->with('failure','სურათის დამატებისას პრობლემა წარმოიშვა!');

        }

    }


}
