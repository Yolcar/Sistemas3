@extends('layout')
@extends('sidebar')
@extends('navbar')

@section('body')
<h1 class="page-header">Tracking del Documento</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Tracking</th>
            <th>Responsable</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
        <?php $count=1; ?>
        @foreach($workflows as $workflow)
                @if($count==1)
                    <tr>
                        <td>Creacion</td>
                        @if($workflow->id_user!=0)
                            <td>{{$workflow->user->email}}</td>
                        @else
                            <td></td>
                        @endif
                        <td>{{$workflow->estado->name}}</td>
                    </tr>
                    <br>
                @elseif($count==2)
                    <tr>
                        <td>Revision</td>
                        @if($workflow->id_user!=0)
                            <td>{{$workflow->user->email}}</td>
                        @else
                            <td></td>
                        @endif
                        <td>{{$workflow->estado->name}}</td>

                    </tr>
                    <br>
                @elseif($count==3)
                    <tr>
                        <td>Validacion</td>
                        @if($workflow->id_user!=0)
                            <td>{{$workflow->user->email}}</td>
                        @else
                            <td></td>
                        @endif
                        <td>{{$workflow->estado->name}}</td>
                    </tr>
                    <br>
                @elseif($count==4)
                    <tr>
                        <td>Autorizacion</td>
                        @if($workflow->id_user!=0)
                            <td>{{$workflow->user->email}}</td>
                        @else
                            <td></td>
                        @endif
                        <td>{{$workflow->estado->name}}</td>
                    </tr>
                    <br>
                @elseif($count==5)
                    <tr>
                        <td>Aprobacion</td>
                        @if($workflow->id_user!=0)
                            <td>{{$workflow->user->email}}</td>
                        @else
                            <td></td>
                        @endif
                        <td>{{$workflow->estado->name}}</td>
                    </tr>
                    <br>
                @endif
                <?php $count++; ?>
        @endforeach
        </tbody>
    </table>
</div>

@endsection