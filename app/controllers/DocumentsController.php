<?php

use Innaco\Repositories\TemplateRepo;
use Innaco\Repositories\DocumentRepo;
use Innaco\Managers\DocumentManager;

class DocumentsController extends \BaseController {

	protected $templateRepo;
	protected $documentRepo;

	public function __construct(TemplateRepo $templateRepo, DocumentRepo $documentRepo)
	{
		$this->templateRepo = $templateRepo;
		$this->documentRepo = $documentRepo;
	}

	public function templateSelect()
	{
		$templates = $this->templateRepo->findAll();
		return View::make('document.selectTemplate', compact('templates'));
	}

	public function create()
	{
		$id = Input::only('id');
		if ($id['id']==='0'){
			$template = NULL;
			return View::make('document.create',compact('template'));
		}
		$template = $this->templateRepo->find(Input::only('id'));
		return View::make('document.create',compact('template'));
	}

	public function save()
	{
		$document = $this->documentRepo->newDocument();
		$manager = new DocumentManager($document,Input::all());
		$manager->save();
		$document_id = $document->id;
		return Redirect::route('workflow.create',compact('document_id'));
	}

	public function saveEdit()
	{
		$document = $this->documentRepo->find(Input::get('id'));
		$manager = new DocumentManager($document,Input::all());
		dd($manager);
		$manager->save();
		return Redirect::route('home');
	}

	public function edit($id)
	{
		$document = $this->documentRepo->find($id);
		return View::make('document.edit',compact('document'));
	}
}