<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
function order_payment(){
    return $this->belongsTo(order::class,'order_id','id');

}
}
