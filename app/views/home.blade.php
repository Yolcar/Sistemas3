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
				<th>Autor</th>
			</tr>
			</thead>
			<tbody>
			@foreach($documents as $document)
			<tr>
				<td>{{$document->id}}</td>
				<td>{{$document->name}}</td>
				<td>{{$document->user->email}}</td>
			</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection