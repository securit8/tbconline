<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Contributor;

use Illuminate\Http\Request;

use App\Http\Requests\CreateContributor;

use App\Http\Requests\UpdateContributor;

use Image;

use App\Image as Img;


class ContributorsController extends Controller{

    protected $contributor;
    protected $image;

    public function __construct(Contributor $contributor, Img $image){
        $this->contributor = $contributor;
        $this->image = $image;
    }


    public function index(){

        $contributors = $this->contributor->orderBy('id','desc')->paginate(6);

        app()->setLocale('ka');

        return view('admin/contributors/index',['contributors' => $contributors]);
    }


    public function create(){
        return view('admin/contributors/create');
    }

    public function store(CreateContributor $request){
        
        //dd($request->only(['ka','en']));

        $en_name = $request->get('en')['name'] ? $request->get('en')['name'] : "" ;
        $en_description = $request->get('en')['description'] ? $request->get('en')['description'] : "" ;

        $request->merge(['en'=>[
            'name'=>$en_name,
            'description' => $en_description
        ]]);

        $contributor = $this->contributor;

        $contributor->type = ($request->type == '0') ? 0 : 1;
        $contributor->link =  $request->link ? $request->link : "";

        $contributor->fill($request->only(['ka','en']));

        $contributor->save();

        
        if($request->hasFile('image')){
            if($request->file('image')->isValid()){

                
                $Image = $this->image;

                $pathEnding = time().'.'.$request->file('image')->getClientOriginalExtension();

                $Image->location = asset('storage/images/contributors').'/'.$pathEnding;


                $contributor->images()->save($Image);

                Image::make($request->file('image')->getRealPath())->save(public_path().'/storage/images/contributors'.'/'.$pathEnding);

                return back()->with('success','ყველაფერი წარმატებით დაემატა!');
            }
            else 
                return back()->with('failure','სურათის დამატებისას პრობლემა წარმოიშვა!');
            
        }

        return back()->with('success','ყველაფერი წარმატებით დაემატა!');


    }

    public function delete($id){

        $contributor = $this->contributor->where('id',$id)->first();

        foreach($contributor->images as $image){
            $imgEnd = explode('contributors/',$image->location);
            $imgEnd = end($imgEnd);
            $imgEnd = 'storage/images/contributors/'.$imgEnd;
            
            if(file_exists($imgEnd))
                unlink($imgEnd);
            
            $image->delete();
        }

        $contributor->delete();

        return back()->with('success','წარმატებით წაიშალა კონტრიბუტორი!');

    }

    public function edit($id){
        $contributor = $this->contributor->where('id',$id)->first();

        return view('admin/contributors/edit',['contributor' => $contributor]);
    }

    public function update(UpdateContributor $request,$id){
        //dd($request->input());
        //dd($request->only(['ka','en']));

        $en_name = $request->get('en')['name'] ? $request->get('en')['name'] : "" ;
        $en_description = $request->get('en')['description'] ? $request->get('en')['description'] : "" ;

        $request->merge(['en'=>[
            'name'=>$en_name,
            'description' => $en_description
        ]]);

        $contributor = $this->contributor->where('id',$id)->first();
        

        $contributor->type = ($request->type == '0') ? 0 : 1;
        $contributor->link = $request->link ? $request->link : "";

        $contributor->deleteTranslations();
        $contributor->fill($request->only(['ka','en']));

        $contributor->save();

        
        if($request->hasFile('image')){
            if($request->file('image')->isValid()){


                if(count($contributor->images)){
                    $oldImage = $contributor->images->first();

                    $imgEnd = explode('contributors/',$oldImage->location);
                    $imgEnd = end($imgEnd);
                    $imgEnd = 'storage/images/contributors/'.$imgEnd;
    
                    if(file_exists($imgEnd))
                        unlink($imgEnd);
                    
                    $oldImage->delete();
                }
                
                $Image = $this->image;

                $pathEnding = time().'.'.$request->file('image')->getClientOriginalExtension();

                $Image->location = asset('storage/images/contributors').'/'.$pathEnding;


                $contributor->images()->save($Image);

                Image::make($request->file('image')->getRealPath())->save(public_path().'/storage/images/contributors'.'/'.$pathEnding);

                return back()->with('success','ყველაფერი წარმატებით შეიცვალა!');
            }
            else 
                return back()->with('failure','სურათის შეცვლისას პრობლემა წარმოიშვა!');
            
        }

        return back()->with('success','ყველაფერი წარმატებით შეიცვალა!');

    }



}