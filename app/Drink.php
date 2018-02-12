<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = ['drinkName','price'];
}

class Ingredients extends Model
{
    function sales(){
        hasMany('app/Sales');
    }
    function ingredients(){
        belongsToMany('app/Sales')->withPivot('dose');
    }
}

class Sales extends Model
{
    function drink(){
        belongsTo('app/Drink');

        )
    }
}