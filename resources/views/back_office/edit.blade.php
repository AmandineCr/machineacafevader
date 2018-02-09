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
            </tr>
        </table>
        <form action="/edit" method="post">
            {{csrf_field()}}
            <div class="btn-group-vertical" data-toggle="buttons">
                <input type="text" name="addDrink" class="form control" placeholder="Drink Name">
            </div>
        </form>

    </div>
