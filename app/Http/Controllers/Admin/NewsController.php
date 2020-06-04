<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CreateNews;
use App\Http\Requests\UpdateNews;
use App\Http\Controllers\Controller;
use App\News;
use Carbon\Carbon;

use App\Video;

use App\Gallery;

use App\NewsVideo;

use App\NewsStatus;

class NewsController extends Controller
{

    protected $news;
    protected $videos;
    protected $gallery;
    protected $newsVideoPivot;
    protected $newsStatus;

    public function __construct (News $news, Video $videos, Gallery $gallery,NewsVideo $newsVideoPivot, NewsStatus $newsStatus)
    {

        $this->news = $news;
        $this->videos = $videos;
        $this->gallery = $gallery;
        $this->newsVideoPivot = $newsVideoPivot;
        $this->newsStatus = $newsStatus;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news']  = $this->news->paginate(10);

        $first = $this->newsStatus->where('id',1)->first();
        $second = $this->newsStatus->where('id',2)->first();
        $third = $this->newsStatus->where('id',3)->first();

        $data['first'] = $first;
        $data['second'] = $second;
        $data['third'] = $third;

        return view('admin.news.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['videos'] = $this->videos->orderBy('id','desc')->get();
        $data['images'] = $this->gallery->orderBy('id','desc')->get();
        return view('admin.news.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //CreateNews
    public function store(CreateNews $request)
    {

        $except = ['token','mainImage'];
        $dateFormat = Carbon::parse($request->date);
        $request->merge(['date' => $dateFormat]);

        $news = $this->news->create($request->except($except));

        if($request->hasFile('mainImage')){
            $filePath = $this->uploadImage($request->file('mainImage'), 'news_main', ['width' => 320, 'height' => null]);
            $news->fill(['image' => $filePath]);
        }


        if($request->has(['videoGalleries']))
        foreach($request->videoGalleries as $video){
            $news->videoGalleries()->attach($video);
        }


        if($request->imageGallery!="NO"){
        $gal = $this->gallery->where('id',$request->imageGallery)->first();
        $news->imageGallery()->attach($gal);
        }



        $news->save();

        if(isset($news))
            return redirect()->route('admin.news.index')->with('success','სიახლე წარმატებით დაემატა!');
         else
             return redirect()->route('admin.news.index')->with('failure','შეცდომა მოხდა, გთხოვთ სცადოთ თავიდან');


        return redirect()->route('admin.news.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['videos'] = $this->videos->orderBy('id','desc')->get();
        $data['images'] = $this->gallery->orderBy('id','desc')->get();
        $data['news'] = $this->news->where('id', $id)->first();

        //dd($data['news']->imageGallery->foreign_id);

        $selectedVideoData = [];

        foreach($data['news']->videoGalleries as $video){
            $selectedVideoData[$video->pivot->video_id] = 1;
        }


        $data['selectedVideoData'] = $selectedVideoData;

        return view('admin.news.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $except = ['token','mainImage'];
        $news = $this->news->where('id', $id)->first();

        /**
        * Convert date type to datetime and change date value.
        */
        $dateFormat = Carbon::parse($request->date);
        $request->merge(['date' => $dateFormat]);

        $news->fill($request->except($except));

        if($request->hasFile('mainImage')){
            $this->deleteImage($news->image);
            $filePath = $this->uploadImage($request->file('mainImage'), 'news_main', ['width' => 320, 'height' => null]);
            $news->fill(['image' => $filePath]);
        }


        $news->videoGalleries()->detach();

        if($request->has(['videoGalleries']))
            foreach($request->videoGalleries as $video){
                $news->videoGalleries()->attach($video);
            }


        $news->imageGallery()->detach();

        if($request->imageGallery!="NO"){
            $gal = $this->gallery->where('id',$request->imageGallery)->first();
            $news->imageGallery()->attach($gal);
        }



        $news->save();

        if(isset($news))
            return redirect()->route('admin.news.index')->with('success','სიახლე წარმატებით შეიცვალა!');
         else
            return redirect()->route('admin.news.index')->with('failure','სიახლე შეიცვლისას წარმოიშვა პრობლემა!');

    }


    public function destroy($id)
    {
        $news = $this->news->find($id);

        $news->delete();

        if($news)
            return redirect()->back()->with('success','სიახლე წარმატებით წაიშალა!');
        else
            return redirect()->back()->with('failure','შეცდომა მოხდა, გთხოვთ სცადოთ თავიდან!');




    }

    private function uploadImage($image, $folder, $imageAttribute)
    {
        $uploadFileName = mt_rand(1,1000000).time().'.'.$image->getClientOriginalExtension();
        $destinationPath = 'public/images/'.$folder;
        $thumbImg = \Image::make($image->getRealPath())
                        ->resize($imageAttribute['width'], $imageAttribute['height'], function ($constraint) {$constraint
                            ->aspectRatio();});

        $thumbImg->save($destinationPath.'/'.$uploadFileName);

        return 'public/images/'.$folder.'/'.$uploadFileName;
    }

    private function deleteImage($filePath)
    {
        try {
            if (file_exists($filePath)){
                unlink($filePath);
            }
        }catch (\Exception $e) {
            \Log::emergency($e->getMessage(), " $filePath File Did Not Deleted!");
        }
    }

    public function setNewsStatus(Request $request){
        

        $first = $this->newsStatus->where('id',1)->first();

        $second = $this->newsStatus->where('id',2)->first();
        $third = $this->newsStatus->where('id',3)->first();


        if($request->first!='NO')

            $first->news_id = $request->first;
        else
            $first->news_id = null;


        $first->save();

        if($request->second!='NO')
            $second->news_id = $request->second;
        else
            $second->news_id = null;

        $second->save();

        if($request->third!='NO')
            $third->news_id = $request->third;
        else
            $third->news_id = null;

        $third->save();

        return back()->with('success','ყველაფერი წარმატებით შეიცვალა!');
    }
}
