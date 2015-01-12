@extends('layout')
@extends('sidebar')
@extends('navbar')

@section('head')
    {{ HTML::script('ckeditor/ckeditor.js') }}
@endsection

@section('body')

    {{ Form::open(['route' => 'document.save', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

    <h1 class="page-header">Crear Documentos</h1>
    {{ Field::text('name','',['placeholder' => 'Informacion Documento']) }}
    @if(isset($template))
    @foreach($template as $datos)
        {{ Form::hidden('type',$datos->id) }}
        {{ Field::textarea('body',$datos->body, ['class' => 'ckeditor']) }}
    @endforeach
    @else
    {{ Field::textarea('body','',  ['class' => 'ckeditor']) }}
    @endif

    <p>
        <a href="{{ route('document.select_template') }}"><button type="button" class="btn btn-danger">← Atrás</button></a>
        <input type="submit" value="Continuar" class="btn btn-success">
    </p>
    {{ Form::close() }}

@stop