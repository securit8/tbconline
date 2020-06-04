<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;

    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = ['name','description'];
}
