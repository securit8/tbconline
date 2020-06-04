<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','description']; 
}
