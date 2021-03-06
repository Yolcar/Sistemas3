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
		if ($id['id']== NULL or $id['id']==''){
			return Redirect::route('home');
		}
		$template = $this->templateRepo->find(Input::only('id'));
		return View::make('document.create',compact('template'));
	}

	public function save()
	{
		$document = $this->documentRepo->newDocument();
		$manager = new DocumentManager($document,Input::all());
		$manager->save();
		$id = $document->id;
		return Redirect::route('workflow.create',compact('id'));
		//return Redirect::route('workflow.create')->with();
	}

	public function saveEdit()
	{
		$document = $this->documentRepo->find(Input::get('id'));
		$manager = new DocumentManager($document,Input::all());
		$manager->save();
		return Redirect::route('home');
	}

	public function edit($id)
	{
		$document = $this->documentRepo->find($id);
		return View::make('document.edit',compact('document'));
	}

	public function imprimir($id)
	{
		$data = $this->documentRepo->find($id);
		$pdf = PDF::loadView('pdf.file', $data);
		return $pdf->stream('invoice.pdf');
		//$pdf = App::make('snappy.pdf.wrapper');
		//$pdf->loadHTML($this->documentRepo->find($id)->body);
		//return $pdf->stream();
		//return PDF::loadFile('http://www.github.com')->stream('github.pdf');
	}

	public function home(){
		$documents = $this->documentRepo->findAll();
		return View::make('document.home',compact('documents'));
	}
}