@extends('layout')
@extends('sidebar')
@extends('navbar')

@section('head')
    {{ HTML::script('ckeditor/ckeditor.js') }}
@endsection

@section('body')

    {{ Form::open(['route' => 'document.save.edit', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

    <h1 class="page-header">Crear Documentos</h1>
    {{Form::hidden('name',$document->name)}}
    {{Form::hidden('id_user_create',$document->id_user_create)}}
    {{ Field::textarea('body',$document->body, ['class' => 'ckeditor']) }}

    <p>
        <a href="{{ route('document.select_template') }}"><button type="button" class="btn btn-danger">← Atrás</button></a>
        <input type="submit" value="Continuar" class="btn btn-success">
    </p>
    {{ Form::close() }}

@stop