<?php namespace Innaco\Entities;

class Document extends \Eloquent {
	protected $fillable = ['name', 'body','id_user_create'];

	public function user(){
		return $this->belongsTo('Jacopo\Authentication\Models\User','id_user_create', 'id');
	}

}