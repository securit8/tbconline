<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\CreateGallery;

use App\Http\Requests\UpdateGallery;

use Image;

use App\Image as Img;

use App\Gallery;

class GalleryController extends Controller{

    protected $gallery;
    protected $image;

    public function __construct(Gallery $gallery, Img $image){
        $this->gallery = $gallery;
        $this->image = $image;
    }


    public function index(){

        $galleries = $this->gallery->orderBy('id','desc')->paginate(6);
        return view('admin/gallery/index',['galleries'=>$galleries]);
    }

    public function create(){
        return view('admin/gallery/create');
    }

    public function edit($id){
        $gallery = $this->gallery->where('id',$id)->first();
        return view('admin/gallery/edit',['gallery'=>$gallery]);
    }

    public function store(CreateGallery $request){

        $en_name = $request->get('en')['name'] ? $request->get('en')['name'] : "" ;

        $request->merge([
            'en'=>['name'=>$en_name]
        ]);


        $gallery = $this->gallery;

        $gallery->fill($request->only(['ka','en']));

        if($request->hasFile('poster')){
            if($request->file('poster')->isValid()){



                $pathEnding = time().'.'.$request->file('poster')->getClientOriginalExtension();

                $gallery->image = asset('/public/images/galleries').'/'.$pathEnding;


                Image::make($request->file('poster')->getRealPath())->save(public_path().'/images/galleries'.'/'.$pathEnding);

            }
        }

        $gallery->save();


        if($request->hasFile('images')){
            foreach($request->file('images') as $file){
                $image = new Img;
                $pathEnding = microtime(true).'.'.$file->getClientOriginalExtension();

                $image->location = asset('/public/images/galleries').'/'.$pathEnding;

                $gallery->images()->save($image);

                Image::make($file->getRealPath())->save(public_path().'/images/galleries'.'/'.$pathEnding);
            }
        }


        return back()->with('success','გალერია წარმატებით დაემატა!');
    }

    public function update(UpdateGallery $request,$id){

        $en_name = $request->get('en')['name'] ? $request->get('en')['name'] : "" ;

        $request->merge([
            'en'=>['name'=>$en_name]
        ]);

        $gallery = $this->gallery->where('id',$id)->first();

        $gallery->deleteTranslations();

        $gallery->fill($request->only(['ka','en']));

        if($request->hasFile('poster')){
            if($request->file('poster')->isValid()){

                $imgEnd = explode('galleries/',$gallery->image);
                $imgEnd = end($imgEnd);
                $imgEnd = '/images/galleries/'.$imgEnd;

                if(file_exists($imgEnd))
                    unlink($imgEnd);


                $pathEnding = time().'.'.$request->file('poster')->getClientOriginalExtension();

                $gallery->image = asset('/images/galleries').'/'.$pathEnding;


                Image::make($request->file('poster')->getRealPath())->save(public_path().'/images/galleries'.'/'.$pathEnding);

            }
        }

        $gallery->save();

        if($request->hasFile('images')){
            foreach($request->file('images') as $file){
                $image = new Img;
                $pathEnding = (microtime(true)).'.'.$file->getClientOriginalExtension();

                $image->location = asset('/images/galleries').'/'.$pathEnding;

                $gallery->images()->save($image);

                Image::make($file->getRealPath())->save(public_path().'/images/galleries'.'/'.$pathEnding);
            }
        }

        return back()->with('success','ცვლილება წარმატებით განხორციელდა!');
    }

    public function deleteImage($id){
        $img = $this->image->where('id',$id)->first();
        $imgEnd = explode('galleries/',$img->location);
        $imgEnd = end($imgEnd);
        $imgEnd = '/images/galleries/'.$imgEnd;

        if(file_exists($imgEnd))
            unlink($imgEnd);

        $img->delete();
        return back();
    }

    public function delete($id){
        $gallery = $this->gallery->where('id',$id)->first();

        $poster = $gallery->image;

        $poster = explode('galleries/',$poster);
        $poster = public_path().'/images/galleries/'.end($poster);

        if(file_exists($poster))
            unlink($poster);

        foreach($gallery->images as $image){
            $img = $image->location;
            $img = explode('galleries/',$img);
            $img = public_path().'/images/galleries/'.end($img);

            if(file_exists($img))
                unlink($img);

            $image->delete();
        }

        $gallery->delete();

        return redirect(route('admin.gallery.index'))->with('success','გალერეა წარმატებით წაიშალა');
    }

}
