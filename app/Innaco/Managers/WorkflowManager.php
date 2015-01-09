<?php namespace Innaco\Managers;

class WorkflowManager extends BaseManager{

    public function getRules()
    {
        $rules = [
            'id_permission' => 'required',
            'id_user' => 'required',
            'estado' => 'required',
            'id_document' => 'required'
        ];

        return $rules;
    }
}