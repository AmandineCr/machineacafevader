<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    function boissons(){
        belongsToMany('app/Drink')->withPivot('dose');
    }
}
