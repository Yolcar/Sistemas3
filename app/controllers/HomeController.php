<?php

use Innaco\Repositories\DocumentRepo;


class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	protected $documentRepo;

	public function __construct(DocumentRepo $documentRepo)
	{
		$this->documentRepo = $documentRepo;
	}

	public function index()
	{
		$documents = $this->documentRepo->findAll();
		return View::make('home',compact('documents'));
	}

}
