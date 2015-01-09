<?php namespace Innaco\Managers;


class DocumentManager extends BaseManager{

    public function getRules()
    {
        $rules = [
            'name' => 'required',
            'body' => 'required'
        ];

        return $rules;
    }

}