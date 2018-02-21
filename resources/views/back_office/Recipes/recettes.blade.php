@extends('template.back_office.default_template')

@section('titre')
    Recipes management
@stop

@section ('content')

    <table class="table">
        <thead>
        <tr>
            <th>drink Name</th>
            <th>ingredient Name</th>
            <th>dose</th>
        </tr>
        </thead>

        <tbody>
        @foreach($recipes as $recipe)
            // dans toutes mes recettes je veux selectionner une recette
            @foreach($recipe->ingredients as $ingredient)
                // relation dans ma recette je veux recuperer un ingredient
            <tr>
                <td>{{$recipe->drinkName}}</td>
                <td>{{$ingredient->ingredientName}}</td>
                <td>{{$ingredient->pivot->dose}}</td>
                <td>
                    <form action="/recipes/{{$recipe->id}}" method="post">
                        {{method_field('DELETE')}}
                        {{ csrf_field()}}
                        <button type="submit" class="btn btn-outline-danger col-md-offset-1 col-md-5">X</button>
                    </form>
                </td>
            @endforeach
        @endforeach
            </tr>
        </tbody>
        <tfooter>
                <form action="/recipes" method="post">
                    {{csrf_field()}}
                    <td class="form-group">
                        <input type="text" name="adddrink" class="form control" placeholder="Drink Name">
                    </td>
                    <td class="form-group">
                        <input type="text" name="addingredient" class="form control" placeholder="Ingredient">
                    </td>
                    <td class="form-group">
                        <input type="number" name="adddose" class="form control" placeholder="Dose">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-outline-success">add</button>
                    </td>
                </form>
        </tfooter>
    </table>


@stop

