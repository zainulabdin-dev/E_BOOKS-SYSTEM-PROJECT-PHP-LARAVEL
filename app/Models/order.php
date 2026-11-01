<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    function user_order(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    function book_order (){
        return $this->belongsTo(book::class,'book_id','id');
    }
}
