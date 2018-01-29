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
                <th>Show</th>
            </tr>
            </thead>
            @foreach($drinks as $drink)
                <tr>
                    <td>
                        {{$drink->titles}}
                    </td>                    <td>
                        {{$drink->prices}}
                    </td>
                    <td>
                        <a href="/drinks/{{$drink->id}}">Détails</a>
                    </td>
                    <td>
                    <a  href="/drink/{{$drink->id}}/edit" class="btn btn-info">
                        {{--<form action="/drinks/{{$drink->id}}" method="post">--}}
                        edit
                    </a>

                    <a  href="/drink/{{$drink->id}}/edit" class="btn btn-danger">
                        remove
                        {{--{{csrf_field()}}{{method_field('GET')}}--}}
                    </a>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="btn-group-vertical" data-toggle="buttons">
            <a  href="/drink/{{$drink->id}}/edit" class="btn btn-success" >
                add
            </a>

        </div>
    </div>
@stop