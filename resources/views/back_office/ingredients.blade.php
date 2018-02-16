@extends('template.back_office.default_template')

@section('titre')
    Ingredients inventory
@stop

@section ('content')
    <table class="table">
        <thead>
        <tr>
            <th>ingredient Name</th>
            <th>drink Name</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($ingredients as $ingredient)
            <tr>
                <th>{{$ingredient->id}}</th>
                <th>{{$ingredient->ingredientName}}</th>
                <th>{{$ingredient->inStock}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="btn-group">
        <button type="button" class="btn btn-outline-success">Add</button>
        <button type="button" class="btn btn-outline-danger">Remove</button>
        <button type="button" class="btn btn-outline-warning">Modify</button>
    </div>



@stop

