<?php namespace Innaco\Repositories;

use Innaco\Entities\Document;

class DocumentRepo extends BaseRepo{

    public function getModel()
    {
        return new Document;
    }

    public function newDocument()
    {
        $document = new Document();
        $document->id_user_create = \Sentry::getUser()->id;
        return $document;
    }

}