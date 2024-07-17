<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
     //Relacion uno a muchos con hotel
     public function hotel(){
        return $this->belongsTo('App\Models\Hotel');
    }
      //Relacion Muchos a Muchos
      public function agency(){
        return $this->belongsToMany('App\Models\Agency');
    }
    //Relacion Muchos a Muchos 
    public function particular(){
        return $this->belongsToMany('App\Models\Particular');
    }
}
