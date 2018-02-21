<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = ['drinkName','price'];

    function sales(){
        return $this->hasMany('app\Sale');
    }

//    function ingredientsdose()
//    {
//        return $this->belongsToMany('app\Sale')->withpivot(['in']);
//    }
    function ingredients(){
        return $this->belongsToMany('App\Ingredient')->withPivot(['dose']);
    }

}


