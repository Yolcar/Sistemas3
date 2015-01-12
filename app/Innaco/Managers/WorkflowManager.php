<?php namespace Innaco\Managers;

class WorkflowManager extends BaseManager{

    public function getRules()
    {
        $rules = [
            'document_id' => 'required',
            'permission' => 'required',
            'id_user' => 'required',
            'estado_id' => 'required',
        ];

        return $rules;
    }
}