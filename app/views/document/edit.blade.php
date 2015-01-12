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
    {{Form::hidden('type',$document->template->id)}}
    {{Form::hidden('id',$document->id)}}
    {{ Field::textarea('body',$document->body, ['class' => 'ckeditor']) }}

    <p>
        <a href="{{ route('document.list') }}"><button type="button" class="btn btn-danger">← Atrás</button></a>
        <input type="submit" value="Continuar" class="btn btn-success">
    </p>
    {{ Form::close() }}

@stop