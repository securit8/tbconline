<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{ 
    
    protected $fillable = ['location','imagetable_id','imagetable_type'];

    public function imagetable()
    {
        return $this->morphTo();
    }
}
