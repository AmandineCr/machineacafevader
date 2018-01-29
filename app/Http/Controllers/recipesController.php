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
        $allrecipes =DB::select('select * from boissoningredients');


        return view('back_office/recettes', ['allrecipes' => $allrecipes]);
    }
}

?>