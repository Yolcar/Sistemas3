@extends('layout')
@extends('sidebar')
@extends('navbar')

@section('body')
	<h1 class="page-header">Dashboard</h1>

	<h2 class="sub-header">Section title</h2>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
			</thead>
			<tbody>
			@foreach($documents as $document)
			<tr>
				<td width="20%">{{$document->id}}</td>
				<td width="50%">{{$document->name}}</td>
				<td width="30%">
					<a href="{{Route('workflow.show',$document->id)}}" class="btn btn-info">
						Ver Tracking
					</a>
					<a href="#" class="btn btn-info">
						Editar
					</a>
					@if($document->workflow->last()['estado_id'] == 3)
					<a href="#" class="btn btn-info">
						Imprimir
					</a>
					@endif
				</td>
			</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection