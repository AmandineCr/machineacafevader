<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Drink;

class showController extends Controller
{
//    function showDetails($code){
//        $boisson =DB::select('select prix,nomsboissons FROM boissons WHERE code=?', [$code]);
//
//        return view('back_office/show', ['boissons'=> $boisson]);
//
//    }

    function detailsDrink($id){
        $drink = Drink::find($id);
//            DB::select('select prix,nomBoisson FROM boissons WHERE code=?', [$code]);

        return view('back_office/show/{{$drink->id}}', ['drink'=> $drink]);

    }
}
