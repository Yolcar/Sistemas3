@extends('layout')
@extends('sidebar')
@extends('navbar')

@section('body')
	<h1 class="page-header">Revisar Documento</h1>

	<div class="table-responsive">
		<table class="table table-striped">
			<div class="col-md-8">
				{{$workflows->document->body}}
			</div>
			<div class="col-md-3">
				<div style="position: fixed; top: 50%; right: 100px" class="pull-right">
				<p>
					<a href="{{ route('workflow.reviewDeny',$workflows->id) }}"><button type="button" class="btn btn-danger">Rechazar</button></a>
					<a href="{{ route('workflow.reviewAccept',$workflows->id) }}"><button type="button" class="btn btn-success">Aceptar</button></a>
				</p>
				</div>
			</div>
		</table>
	</div>
@endsection