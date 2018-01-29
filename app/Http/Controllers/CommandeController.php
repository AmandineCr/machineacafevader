<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class CommandeController extends Controller
{
     function listCommande(){
    	$commandes =DB::select("SELECT refCommande FROM commandes ORDER BY 'date' DESC");
    	dump($commandes);
		return view('back_office/commandes', ['commandes'=> $commandes]);

	}
}


