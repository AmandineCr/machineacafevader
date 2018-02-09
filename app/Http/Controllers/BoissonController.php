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
        return Drink::make('drink.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $drink = new Drink;
        $drink->drinkName = input::get('drinkName');
        $drink->price = input::get('price');
        $drink->id = input::get('id');

        $drink->save();

        Session::flash('flash_message', 'Drink successfully added!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function show(Drink $id)
    {
        $drink = Drink::find($id);
        return view('back_office.show', ['drink'=> $drink]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function edit(Drink $id)
    {
        $drink = Drink::find($id);

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
        $post = drink::find($drink);

        //complete validation here

        $post->drinkName  = Input::get('drinkName');
        $post->users = Auth::user()->first;
        $post->price   = Input::get('price');


        if($post->save()) {
            return Redirect::route('drinks.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drink $drink)
    {
        Drink::destroy($drink);
        Session::flash('message', 'You have successfull deleted a blog post');

        return Redirect::route('drinks.index');
    }

    function ordernames(){
        $drinks = Drink::select('drinkName','price','ID')->orderBy('drinkName','desc')->get();
        return view('back_office/boissons', ['drinks'=> $drinks]);
    }

    function orderprices(){
        $drinks = Drink::select('drinkName','price','ID')->orderBy('price','desc')->get();
        return view('back_office/boissons', ['drinks'=> $drinks]);
    }
}
