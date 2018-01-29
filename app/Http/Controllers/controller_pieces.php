<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
class controller_pieces extends Controller
{
    public function list()
    {
        $i=0;
        $coin_list = [
            200 => 10,
            100 => 7,
            50 => 15,
            20 => 23,
            10 => 2,
            5 => 5
        ];

        return view('back_office.pieces', ['coin_list' => $coin_list, 'i' => $i]);
    }
}

