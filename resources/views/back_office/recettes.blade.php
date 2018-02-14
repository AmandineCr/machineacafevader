@extends('template.back_office.default_template')

@section('titre')
    Gestion des recettes
@stop

@section ('content')
    <button type="button" class="btn btn-outline-success">Add</button>
    <table class="table">
        <thead>
        <tr>
            <th>ingredient Name</th>
            <th>drink Name</th>
            <th>dose</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($recipes as $recipe)
            <tr>
                <th>{{$recipe->ingredientName}}</th>
                <th>{{$recipe->drinkName}}</th>
                <th>{{$recipe->dose}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="btn-group">
        <button type="button" class="btn btn-outline-danger">Remove</button>
        <button type="button" class="btn btn-outline-warning">Modify</button>
    </div>



@stop

