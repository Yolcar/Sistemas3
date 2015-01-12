<?php namespace Innaco\Entities;


class Workflow extends \Eloquent {
	protected $fillable = ['document_id','permission', 'id_user','estado_id'];

	public function user(){
		return $this->belongsTo('Jacopo\Authentication\Models\User','id_user', 'id');
	}

	public function estado(){
		return $this->belongsTo('\Innaco\Entities\Estado','estado_id','id');
	}

	public function document(){
		return $this->belongsTo('Innaco\Entities\Document');
	}
}