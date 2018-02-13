@extends('template.back_office.default_template')

@section('titre')
    Gestion des drinks
@stop

@section('content')
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>

            <tr>
                <th><a href="/drinks/orderbyname">Drinks available</a></th>
                <th><a href="/drinks/orderbyprice">Prices</a></th>
                <th>Details</th>
            </tr>
            </thead>
            @foreach($drinks as $drink)
                <tr>
                    <td>
                        {{$drink->drinkName}}
                    </td>
                    <td>
                        {{$drink->price}}
                    </td>
                    <td>
                        <a href="/drinks/{{$drink->id}}">Show details</a>
                    </td>

                    <td>
                        <form action="edit" method="post">
                            {{csrf_field()}}
                            <a class="btn btn-outline-info" href="/drinks/{{$drink->id}}/edit" >
                                edit
                            </a>
                        </form>
                    </td>
                    <td>
                        <form method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-lg btn-warning col-md-offset-1 col-md-3">Supprimer</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </table>

        <form action="/edit" method="post">
            {{csrf_field()}}
        <div class="btn-group" data-toggle="buttons">
            <div class="btn-group" data-toggle="buttons">
                <input type="text" name="addDrink" class="form control" placeholder="Drink Name">
            </div>
            <div>
                <input type="text" name="addPrice" class="form control" placeholder="Drink Price">
            </div>
                add
        </div>

@stop