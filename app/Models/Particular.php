<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    use HasFactory;
    //Relacion Muchos a Muchos 
    public function room(){
        return $this->belongsToMany('App\Models\Room');
    }
}
