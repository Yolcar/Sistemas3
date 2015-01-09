@extends('layout')
@extends('sidebar')
@extends('navbar')

@section('body')
	<h1 class="page-header">Asignar Estado</h1>

	{{ Form::open(['route' => 'workflow.save', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}
	<div class="btn-group col-lg-6">
		{{Form::hidden('document_id',$document)}}
		@foreach($permisosDocumentos as $permisoDocumento)
			<div class="form-group">
				{{Form::label('name',$permisoDocumento->name)}}
				{{Form::select($permisoDocumento->id,$Users)}}
			</div>
		@endforeach

		<p>
			<a href="{{ route('home') }}"><button type="button" class="btn btn-danger">← Atrás</button></a>
			<input type="submit" value="Continuar" class="btn btn-success">
		</p>
		{{ Form::close() }}
@endsection