<?php namespace Innaco\Entities;

class Document extends \Eloquent {
	protected $fillable = ['name', 'body','type'];

	public function template(){
		return $this->belongsTo('\Innaco\Entities\Template','type','id');
	}

	public function workflow(){
		return $this->hasMany('\Innaco\Entities\Workflow');
	}

}