<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class book extends Model
{
    function book_category(){
        return $this->belongsTo(category::class,'category_id','id');
    }
    function book_author(){
        return $this->belongsTo(author::class,'author_id','id');
    }
}
