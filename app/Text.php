<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model

{
    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = ['name', 'description'];

    public $incrementing = true;

    public function images(){
        return $this->morphMany('App\Image', 'imagetable');    
    }
}