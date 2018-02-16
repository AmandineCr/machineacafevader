@extends('template.back_office.default_template')

@section('titre')
   Drinks form
@stop

@section('content')
    <div class="table-responsive">
        <table class="table table-hover">

    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
            <tr>
                <td>
                    <form class="" action="/drinks" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                    </form>
                </td>
            </tr>

            <tr>
                <td>
                <form action="{{route('ingredients.store')}}" class="form-group well col-md-offset-2 col-md-8" method="post">
                    {{ csrf_field() }}
                    <label class="col-md-4" for="name">Ingredient Name</label>
                    <input class="col-md-8" name="name" required="required" type="text">
                    <br><br>
                    <label class="col-md-4" for="stock">Stock</label>
                    <input class="col-md-8" type="text" name="stock" required="required">
                    <br><br>
                    <button type="submit" class="btn btn-lg btn-primary">Add</button>
                </form>
            </tr>
                </td>
                    <form method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" class="btn btn-lg btn-warning col-md-offset-1 col-md-3">Supprimer</button>
                    </form>
        </table>
    </div>
@stop