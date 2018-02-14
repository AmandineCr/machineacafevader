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
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <a class="btn btn-outline-info" href="/drinks/{{$drink->id}}/edit" >
                                edit
                            </a>
                        </form>
                    </td>
                    <td>
                        <form method="post">
                            {{method_field('DELETE')}}
                            {{ csrf_field() }}
                            <button type="submit" value="Delete" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <form action="/drinks" method="post">
            {{csrf_field()}}
            <input type="text" name="adddrink" class="form control" placeholder="Drink Name">
            <input type="number" name="addprice" class="form control" placeholder="Drink Price">
            <button type="submit" class="btn btn-success">add</button>
        </form>


@stop