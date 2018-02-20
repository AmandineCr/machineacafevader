@extends('template.back_office.default_template')

@section('titre')
    Drinks informations
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

        <div class="btn-group-vertical" data-toggle="buttons">
            <button type="button" class="btn btn-info">
                edit
            </button>
            <button type="button" class="btn btn-danger">
                remove
            </button>
        </div>
    </div>
@stop