@extends('template.back_office.default_template')

@section('titre')
    Drinks formulaire
@stop

@section('content')
    <div class="table-responsive">
        <table class="table table-hover">
            <p>valeur : <b>{{ $drink['drinkName'] }}</b></p>
        </table>
    </div>

@stop