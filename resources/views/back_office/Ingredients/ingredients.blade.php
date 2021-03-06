@extends('template.back_office.default_template')

@section('titre')
    Ingredients inventory
@stop

@section ('content')
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            {{--<th>Drinks</th>--}}
            <th>Ingredients</th>
            <th>Stock</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($ingredients as $ingredient)
            <tr>
                <td>{{$ingredient->id}}</td>
                <td>{{$ingredient->ingredientName}}</td>
                <td>{{$ingredient->inStock}}</td>
                <td>
                    <a class="btn btn-outline-info" href="/ingredients/{{$ingredient->id}}/edit">
                        edit
                    </a>
                    <form action="/ingredients/{{$ingredient->id}}" method="post">
                        {{method_field('DELETE')}}
                        {{ csrf_field() }}
                        <button type="submit" value="Delete" class="btn btn-outline-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <tfooter>
        <form action="/ingredients" method="post">
            {{csrf_field()}}
            <td class="form-group">
                <input type="text" name="addingredient" class="form control" placeholder="Ingredient">
            </td>
            <td class="form-group">
                <input type="integer" name="addstock" class="form control" placeholder="Stock">
            </td>
            <td>
            </td>

            <td>
                <button type="submit" class="btn btn-outline-success">add</button>
            </td>
        </form>
    </tfooter>
@stop

