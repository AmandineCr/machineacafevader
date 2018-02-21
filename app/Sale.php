<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['drinkName','created_at'];

    function drink(){
        return $this->belongsTo('app\Drink');
    }

}
