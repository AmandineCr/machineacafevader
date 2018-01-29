<?php

namespace App\Http\Controllers;
use App\Drink;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class DrinkController extends Controller
{

     function listDrink(){
    	$boissons = Drink::all();
//DB::select('select nomBoisson,code from boissons');

		return view('back_office/boissons', ['boissons'=> $boissons]);

	}

    function detailsDrink($id){
        $boisson = Drink::find($id);
//            DB::select('select prix,nomBoisson FROM boissons WHERE code = :code', ['code' => $code]);

        return view('back_office.show', ['boisson'=> $boisson]);

    }




}

