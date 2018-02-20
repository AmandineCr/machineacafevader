@extends('template.back_office.default_template')

@section('titre')
    Sales management
@stop

@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Type</th>
				<th scope="col">Sold at</th>
			</tr>
		</thead>

		<tbody>
		@foreach($sales as $sale)
			<tr>
				<td>{{$sale->id}}</td>
				<td>{{$sale->drinkName}}</td>
				<td>{{$sale->updated_at}}</td>
				<td>
					<form action="/sales/{{$sale->id}}" method="post">
						{{method_field('DELETE')}}
						{{ csrf_field() }}
						<button type="submit" value="Delete" class="btn btn-outline-danger">Remove</button>
					</form>
				</td>
			</tr>
		@endforeach
		</tbody>
   	<tfooter>
		<form action="/sales" method="post">
			{{csrf_field()}}

			<td class="form-group">
				<input type="text" name="addtype" class="form-control" placeholder="Type">
			</td>
			<td class="form-group">
				<input type="datetime" name="adddate" class="form-control" placeholder="Sold at">
			</td>
			<td>
				<button type="submit" class="btn btn-outline-info">
					add
				</button>
			</td>

		</form>
  	</tfooter>
</table>
@stop