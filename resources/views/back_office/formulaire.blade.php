@extends('template.back_office.default_template')

@section('titre')
   Drinks formulaire
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
                    <form class="" action="/user" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                    </form>
                </td>
            </tr>
        </table>
    </div>
@stop