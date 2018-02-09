<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\support\Facades\DB;

class recipesController extends BaseController
{
    function recipes()
    {
        $recipes = $recipes->drinkName = Drink::get('drinkName');
        $recipes->price = Drink::get('ingredientName');
        return Redirect::route('drink.recettes',['recipes'=>$recipes]);


//        return view('back_office/recettes', ['recipes' => $recipes]);
    }
}

?>