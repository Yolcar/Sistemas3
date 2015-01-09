<?php namespace Innaco\Repositories;
use Innaco\Entities\PermisosDocumento;

class PermisosDocumentoRepo extends BaseRepo{

    public function getModel()
    {
        return new PermisosDocumento;
    }

}