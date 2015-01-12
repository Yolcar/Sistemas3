@extends('layout')
@extends('sidebar')
@extends('navbar')

@section('body')
	<h1 class="page-header">Tracking</h1>

	<div class="table-responsive">
		<table class="table .table-hover">
			<thead>
			<tr>
				<th>Tipo de Documento</th>
				<th>Nombre</th>
				<th>Fecha Creacion</th>
				<th>Acciones</th>
			</tr>
			</thead>
			<tbody>
			@foreach($documents as $document)
			<tr>
				<td>{{$document->template->name}}</td>
				<td>{{$document->name}}</td>
				<td>{{$document->created_at}}</td>
				<?php $count=1; ?>
				@foreach($document->workflow as $workflow_info)
					@if($count==2)
						@if($workflow_info->estado_id == 2)
						<td>
							<a href="{{Route('document.edit',$document->id)}}" class="btn btn-info">
								Editar
							</a>
						</td>
						<td>
							<a href="{{Route('workflow.review',$workflow_info->id)}}" class="btn btn-info">
								Revisar
							</a>
						</td>
						@endif
					@endif
					@if($count==3)
						@if($workflow_info->estado_id == 2)
							<td>
								<a href="{{Route('workflow.validate',$workflow_info->id)}}" class="btn btn-info">
									Validar
								</a>
							</td>
						@endif
					@endif
					@if($count==4)
						@if($workflow_info->estado_id == 2)
							<td>
								<a href="{{Route('workflow.authorization',$workflow_info->id)}}" class="btn btn-info">
									Autorizar
								</a>
							</td>
						@endif
					@endif
					@if($count==5)
						@if($workflow_info->estado_id == 2)
							<td>
								<a href="{{Route('workflow.agree',$workflow_info->id)}}" class="btn btn-info">
									Aprobar
								</a>
							</td>
						@endif
					@endif
					<?php $count++; ?>
				@endforeach
			</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection