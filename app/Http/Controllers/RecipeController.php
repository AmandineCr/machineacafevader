<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Drink;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Drink::with('ingredients')->get();

return view('back_office/recipes.recettes', ['recipes' => $recipes]);
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $data = new Recipe();
        $data->recipes->drinkName=request('adddrink');
        $data->ingredient->ingredientName=request('addingredient');
        $data->ingredient->pivot->dose=request('adddose');
        $data->save();

        return redirect('recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function show(Drink $drink)
    {
        return view('back_office/recipes.show', ['recipe'=> $recipe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function edit(Drink $drink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drink $drink, $recipes)
    {
        $recipes->drinkName=request('adddrink');
        $recipes->ingredientName=request('addingredient');
        $recipes->dose=request('adddose');
        $recipes->save();

        return redirect('recipes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drink $drink)
    {
        $recipe->delete();
    }
}
