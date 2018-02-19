@extends('template.back_office.default_template')

@section('titre')
    Recipes management
@stop

@section ('content')

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
                <td>{{$recipe->ingredientName}}</td>
                <td>{{$recipe->drinkName}}</td>
                <td>{{$recipe->dose}}</td>
                <td>
                    <form action="/recipes/{{$recipe->id}}" method="post">
                        {{method_field('DELETE')}}
                        {{ csrf_field()}}
                        <button type="submit" class="btn btn-outline-danger col-md-offset-1 col-md-6">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfooter>
                <form action="/recipes/{{$recipe->id}}" method="post">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    <td class="form-group">
                        <input type="text" name="adddrink" class="form control" placeholder="Drink Name">
                    </td>
                    <td class="form-group">
                        <input type="number" name="addprice" class="form control" placeholder="Drink Price">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-warning">edit</button>
                    </td>
                </form>
        </tfooter>
    </table>


@stop

