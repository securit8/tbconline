<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = ['name'];

    public function images(){
        return $this->morphMany('App\Image', 'imagetable');    
    }

    public function news(){
        return $this->belongsTo('App\News','foreign_id');
    }
}
