<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Drink;

class DrinkController extends Controller
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
//        Drink::make('drink.create');
//        return view ('drinks');
//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Drink();
        $data->drinkName=request('adddrink');
        $data->price=request('addprice');
//        dd($data);
        $data->save();

        return redirect('drinks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function show(Drink $drink)
    {
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
        $data = new Drink();
        $data->drinkName=request('adddrink');
        $data->price=request('addprice');
        $data->save();

        return redirect('drinks');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drink = Drink::find($id);
        $drink->delete();
//
        return redirect('drinks');
    }



    function ordernames(){
        $drinks = Drink::select('drinkName','price','drink_ID')->orderBy('drinkName','desc')->get();
        return view('back_office/boissons', ['drinks'=> $drinks]);
    }

    function orderprices(){
        $drinks = Drink::select('drinkName','price','drink_ID')->orderBy('price','desc')->get();
        return view('back_office/boissons', ['drinks'=> $drinks]);
    }
}
