<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li><a href="{{ route('home') }}">Inicio<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Documentos<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('document.select_template') }}">Crear</a></li>
                <li><a href="{{ route('document.edit') }}">Editar</a></li>
                <li class="divider"></li>
            </ul>
        </li>
    </ul>
</div>