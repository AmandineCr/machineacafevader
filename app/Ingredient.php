<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['ingredientName','inStock'];

    function boissons(){
        belongsToMany('app/Drink')->withPivot('dose');
    }
}
