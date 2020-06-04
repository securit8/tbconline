<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = ['name'];

    public $timestamps = 'false';

    //public function news(){
    //    return $this->belongsToMany('App\News','news_video','news_id','video_id');
    //}

}
