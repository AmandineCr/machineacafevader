@extends('template.back_office.default_template')

@section('titre')
    Gestion des pieces
@endsection

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Type</th>
            <th scope="col">Quantity</th>
        </tr>
        </thead>
        <tbody>
        @foreach($coins as $coin)
            <tr>
                <td>{{$coin->id}}</td>
                <td>{{$coin->type/100}}€</td>
                <td>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <button type="button" class="btn btn-outline-danger">
                            -
                        </button>
                        <button type="button" class="btn btn-secondary">
                            {{$coin->quantity}}
                        </button>
                        <button type="button" class="btn btn-outline-success">
                            +
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfooter>
            <form>
                <td class="form-group">
                    <input name="addcoin" type="text" class="form-control" placeholder="Type">
                </td>
                <td class="form-group">
                    <input name="addquantity" type="text" class="form-control" placeholder="Quantity">
                </td>
                <td>
                    <button type="submit" class="btn btn-outline-success">
                        add
                    </button>
                </td>
            </form>
        </tfooter>
    </table>
@endsection