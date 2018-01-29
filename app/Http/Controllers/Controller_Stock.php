<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class Controller_Stock extends Controller
{
    Function display_stock()

    {
        $id_ingredients=0;
        $stock_ingre = DB::select('select enStock FROM ingredients');

        return view('back_office.stocks', ['stock_ingre' => $stock_ingre]);

    }
}