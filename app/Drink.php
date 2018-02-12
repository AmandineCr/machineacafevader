<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = ['drinkName','price'];

    function sales(){
        hasMany('app\Sale');
    }

    function ingredients(){
        belongsToMany('app\Sale')->withpivot(['dose']);
    }

}


