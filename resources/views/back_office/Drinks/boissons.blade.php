@extends('template.back_office.default_template')

@section('titre')
    Drinks management
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
            <tbody>
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
                            <a class="btn btn-outline-info" href="/drinks/{{$drink->id}}/edit">
                                edit
                            </a>
                        </form>
                    </td>
                    <td>
                        <form action="/drinks/{{$drink->id}}" method="post">
                            {{method_field('DELETE')}}
                            {{ csrf_field() }}
                            <button type="submit" value="Delete" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

            <tfooter>
                <form action="/drinks" method="post">
                    {{csrf_field()}}
                    <td class="form-group">
                        <input type="text" name="adddrink" class="form control" placeholder="Drink Name">
                    </td>
                    <td class="form-group">
                        <input type="integer" name="addprice" class="form control" placeholder="Drink Price">
                    </td>
                    <td>
                    </td>

                    <td>
                        <button type="submit" class="btn btn-outline-success">add</button>
                    </td>
                </form>
            </tfooter>
        </table>
@stop