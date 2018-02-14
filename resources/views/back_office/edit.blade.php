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
                        <button type="submit" class="btn btn-lg btn-danger col-md-offset-1 col-md-5">Supprimer</button>
                    </form>
                </td>
            </tr>
        </table>

        <form action="edit"  method="post">
            {{method_field('PUT')}}
            {{csrf_field()}}
            <input type="text" name="addDrink" class="form control" placeholder="Drink Name">
            <input type="number" name="addPrice" class="form control" placeholder="Drink Price">
            <button type="submit" class="btn btn-warning">modif</button>
        </form>
    </div>
@stop