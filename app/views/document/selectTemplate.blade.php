@extends('layout')
@extends('sidebar')
@extends('navbar')

@section('head')
    {{ HTML::script('js/radio.js') }}
@endsection

@section('body')
    <h1 class="page-header">Seleccione la plantillas a usar</h1>

    {{ Form::open(['route' => 'document.create', 'method' => 'GET', 'role' => 'form', 'novalidate']) }}
    <div class="btn-group col-lg-6">

        @foreach($templates as $template)
            {{ Form::radio('id', $template->id, false, array('id'=>$template->id)) }}
            {{ Form::label($template->id, $template->name) }}
            <br>
        @endforeach

    <p>
        <a href="{{ route('home') }}"><button type="button" class="btn btn-danger">← Atrás</button></a>
        <input type="submit" value="Continuar" class="btn btn-success">
    </p>
    {{ Form::close() }}

@stop