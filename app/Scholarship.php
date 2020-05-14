<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    public $timestamps = false;

    use \Dimsav\Translatable\Translatable;

    protected $fillable = [
        'application_form'
    ];

    public $translatedAttributes = ['name','description'];

    public function images(){
        return $this->morphMany('App\Image','imagetable');
    }
}
