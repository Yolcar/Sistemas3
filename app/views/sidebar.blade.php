<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-pills">
        @if(Route::getCurrentRoute()->getPath()=='/')
            <li role="presentation" class="active"><a href="{{ route('home') }}">Home</a></li>
        @else
            <li role="presentation"><a href="{{ route('home') }}">Home</a></li>
        @endif
        @if(Route::getCurrentRoute()->getPath()=='document/select-template' or Route::getCurrentRoute()->getPath()=='document/create-document')
            <li role="presentation" class="active"><a href="{{ route('document.select_template') }}">Crear Documento</a></li>
        @else
            <li role="presentation"><a href="{{ route('document.select_template') }}">Crear Documento</a></li>
        @endif
        @if(Route::getCurrentRoute()->getPath()=='document/show' or Route::getCurrentRoute()->getPath()=='document/create-document')
            <li role="presentation" class="active"><a href="{{ route('document.list') }}">Gestionar Documento</a></li>
        @else
            <li role="presentation"><a href="{{ route('document.list') }}">Gestionar Documento</a></li>
        @endif
        @if(Route::getCurrentRoute()->getPath()=='workflow/show')
                <li role="presentation" class="active"><a href="{{ route('workflow.list') }}">Tracking</a></li>
        @else
            <li role="presentation"><a href="{{ route('workflow.list') }}">Tracking</a></li>
        @endif
    </ul>
</div>