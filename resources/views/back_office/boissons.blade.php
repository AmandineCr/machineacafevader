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
                <th><a href="/drinks/orderbyprice">prices</a></th>
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
                        <a href="/drinks/{{$drink->ID}}">Show details</a>
                    </td>

                    <td>
                        <form action="edit" method="post">
                            {{csrf_field()}}

                            <a href="/drinks/{{$drink->ID}}/edit" class="btn btn-outline-info">
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
                            {{--<form action="{{url('drinks', [$drink->id])}}" method="POST">--}}
                            {{--{{method_field('DELETE')}}--}}
                                {{--<button type="submit" class="btn btn-outline-danger" value="Delete"/>Delete--}}
                                {{--</button>--}}
                            {{--</form>--}}
                        {{--</button>--}}
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
            <a href="/drink/{{$drink->id}}add" class="btn btn-success">
                add
            </a>
        </div>
        {{--<a  href="/drink/{{$drink->id}}edit" class="btn btn-info">--}}
        {{--<form action="/drinks/{{$drink->id}}" method="post">--}}
        {{--edit--}}
        {{--</a>--}}

        {{--<a  href="/drink/{{$drink->id}}edit" class="btn btn-danger">--}}
        {{--remove--}}
        {{--{{csrf_field()}}{{method_field('GET')}}--}}
        {{--</a>--}}
    </div>
@stop