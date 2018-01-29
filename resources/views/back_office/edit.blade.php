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
                <td>{{$drink->titles}}</td>
                <td>{{$drink->prices}}</td>
            </tr>
        </table>

        <div class="btn-group-vertical" data-toggle="buttons">
            <button type="button" class="btn">
                edit
            </button>
        </div>
    </div>
