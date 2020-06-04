<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    use \Dimsav\Translatable\Translatable;
    
    public $translatedAttributes = ['name','description'];

    public function images(){
        return $this->morphMany('App\Image', 'imagetable');    
    }
}
