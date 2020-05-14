<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class News extends Model
{
    use Translatable;

    protected $table = "news";

    public $translatedAttributes = ['title', 'description'];

    protected $fillable = ['date','sort', 'image'];

    protected $dates = ['date'];

    public function imageGallery(){
        return $this->belongsToMany('App\Gallery','news_gallery','news_id','gallery_id');
    }

    public function videoGalleries(){
        return $this->belongsToMany('App\Video','news_video','news_id','video_id');
    }
    
}
