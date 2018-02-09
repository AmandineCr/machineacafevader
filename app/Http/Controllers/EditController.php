<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Drink;


class EditController extends Controller
{

    function editDrink($drink)
    {

        $drink->drinkName = Drink::get('drinkName');
        $drink->price = Drink::get('price');
        return Redirect::route('drink.edit',['drink'=>$drink]);
    }
}
