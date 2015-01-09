<?php namespace Innaco\Entities;


class Workflow extends \Eloquent {
	protected $fillable = ['id_permission', 'id_user','estado','id_document'];

}