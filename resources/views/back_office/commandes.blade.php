@extends('template.back_office.default_template')

@section('titre')
    Gestion des commandes
@stop

@section('content')
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
         			@foreach($commandes as $commande)
						<th>{{$commande->refCommande}}</th>
					@endforeach
         		</tr>
			</thead>
     	 		<tr> 
       	 			@foreach($commandes as $commande)
						<td>{{$commande->refCommande}}</td>
					@endforeach
         		</tr>
   		</table>
   	</div><
   	<div class='button'>
   		<button type="button" class="btn btn-info">add</button>
   		<button type="button" class="btn btn-primary">remove</button>
   
  	</div>

@stop