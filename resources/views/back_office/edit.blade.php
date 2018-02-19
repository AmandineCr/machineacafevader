@extends('template.back_office.default_template')

@section('titre')
    Edit drinks
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
                <td>{{$drink->id}}</td>
                <td>{{$drink->drinkName}}</td>
                <td>{{$drink->price}}</td>
                <td>
                    <form action="/drinks/{{$drink->id}}" method="post">
                        {{method_field('DELETE')}}
                        {{ csrf_field()}}
                        <button type="submit" class="btn btn-outline-danger col-md-offset-1 col-md-5">Supprimer</button>
                    </form>
                </td>
            </tr>
        </table>

        <tfooter>
        <form action="/drinks/{{$drink->id}}" method="post">
            {{method_field('PUT')}}
            {{csrf_field()}}
            <td class="form-group">
            <input type="text" name="adddrink" class="form-control" placeholder="Drink Name">
            </td>
            <td class="form-group">
                <input type="number" name="addprice" class="form-control" placeholder="Drink Price">
            </td>
            <td>
                <button type="submit" class="btn btn-outline-warning">edit</button>
            </td>
        </form>
        </tfooter>
    </div>
@stop