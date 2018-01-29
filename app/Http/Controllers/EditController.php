<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Drink;


class EditController extends Controller
{

    function editDrink($drink)
    {

        $drink->titles = Drink::get('titles');
        $drink->prices = Drink::get('prices');
        return Redirect::route('drink.edit',['drinks'=>$drinks]);
    }
    }
