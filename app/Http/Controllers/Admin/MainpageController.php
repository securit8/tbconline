<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\HeaderRequest;
use App\Http\Controllers\Controller;

use App\Image as Img;

use Image;

class MainpageController extends Controller{

    protected $image;
    protected $createImage;

    public function __construct(Img $image,Image $createImage){
        $this->image = $image;
        $this->createImage = $createImage;
    }


    public function index(){

        $image = $this->image->where('imagetable_type','banner')->first();
        return view('admin/mainPage',['image' => $image]);
    }

    public function image(HeaderRequest $request){

        if($request->hasFile('img') && $request->file('img')->isValid()){


            if(!($this->image->where('imagetable_type','banner')->first())){

                  $newImage = $this->image;
                  $newImage->imagetable_type = 'banner';
                  $newImage->location = asset('public\images\banner\banner.jpg');
                  $newImage->imagetable_id = 0;
                  $newImage->save();

                  $successInfo = "სურათი წარმატებით აიტვირთა";
            }
            else
                $successInfo = 'სურათის ცვლილება წარმატებით განხორციელდა';

            $img = Image::make($request->file('img')->getRealPath());

            $img->save(public_path().'\images\banner\banner.jpg');


            return redirect(route('admin.mainpage.index'))->with('success',$successInfo);

        }

        else{
            $failureInfo = "სურათის ატვირთვისას პრობლემა წარმოიშვა. ხელახლა სცადეთ...";

            return redirect(route('admin.mainpage'))->with('failure',$failureInfo);
        }

    }




}
