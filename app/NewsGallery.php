<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class NewsGallery extends Pivot
{
    protected $table = "news_gallery";
}
