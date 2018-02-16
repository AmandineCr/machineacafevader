@extends('template.back_office.default_template')

@section('titre')
    Sales management
@stop

@section('content')
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
         			@foreach($sales as $sale)
						<th>{{$sale->drinkName}}</th>
					@endforeach
         		</tr>
			</thead>
     	 		<tr> 
       	 			@foreach($sales as $sale)
						<td>{{$sale->id}}</td>
					@endforeach
         		</tr>
   		</table>
   	</div><
   	<div class='button'>
   		<button type="button" class="btn btn-info">add</button>
   		<button type="button" class="btn btn-primary">remove</button>
   
  	</div>

@stop