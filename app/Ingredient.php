<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['ingredientName','inStock'];

    function drinks()
    {
        return $this->belongsToMany('App\Drink')->withPivot('dose');
    }
}
