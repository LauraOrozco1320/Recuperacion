<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    //Relacion uno a muchos con Category
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
     //Relacion Uno a Muchos con room
     public function room(){
        return $this->hasMany('App\Models\Room');
    }
}
