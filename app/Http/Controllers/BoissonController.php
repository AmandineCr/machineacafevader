<?php

namespace App\Http\Controllers;

use App\Drink;
use Illuminate\Http\Request;

class BoissonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = Drink::all();
        return view('back_office/boissons', ['drinks'=> $drinks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function show(Drink $drink)
    {
//        $drink = Drink::find($drink);
        return view('back_office.show', ['drink'=> $drink]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function edit(Drink $drink)
    {
        $drink = Drink::find($drink);

        return view('back_office.edit',['drink'=>$drink]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drink $drink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drink $drink)
    {
        //
    }

    function ordernames(){
        $drinks = Drink::select('titles','prices','id')->orderBy('titles','asc')->get();
        return view('back_office/boissons', ['drinks'=> $drinks]);
    }

    function orderprices(){
        $drinks = Drink::select('titles','prices','id')->orderBy('prices','asc')->get();
        return view('back_office/boissons', ['drinks'=> $drinks]);
    }
}
