@extends('template.back_office.default_template')

@section('titre')
    Edit ingredients
@stop

@section('content')
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Drink ID</th>
                <th>Drink informations</th>
                <th>Prices</th>
            </tr>

            </thead>
            <tr>
                <td>{{$ingredient->id}}</td>
                <td>{{$ingredient->ingredientName}}</td>
                <td>{{$ingredient->inStock}}</td>
                <td>
                    <form action="/ingredients/{{$ingredient->id}}" method="post">
                        {{method_field('DELETE')}}
                        {{ csrf_field()}}
                        <button type="submit" class="btn btn-outline-danger col-md-offset-1 col-md-5">Supprimer</button>
                    </form>

                </td>
            </tr>
        </table>
        <tfooter>
            <form action="/ingredients/{{$ingredient->id}}" method="post">
                {{method_field('PUT')}}
                {{csrf_field()}}
                <td class="form-group">
                    <input type="text" name="addingredient" class="form-control" value="{{$ingredient->ingredientName}}">
                </td>
                <td class="form-group">
                    <input type="number" name="addstock" class="form-control" value="{{$ingredient->inStock}}">
                </td>
                <td>
                    <button type="submit" class="btn btn-outline-warning">edit</button>
                </td>
            </form>
        </tfooter>
    </div>
@stop