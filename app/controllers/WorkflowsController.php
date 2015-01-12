<?php

use Innaco\Repositories\WorkflowRepo;
use Innaco\Managers\WorkflowManager;
use Innaco\Repositories\DocumentRepo;
use Innaco\Repositories\TemplateRepo;

class WorkflowsController extends \BaseController {

	protected $workflowRepo;
	protected $documentRepo;
	protected $templateRepo;

	public function __construct(workflowRepo $workflowRepo, documentRepo $documentRepo, templateRepo $templateRepo)
	{
		$this->workflowRepo = $workflowRepo;
		$this->documentRepo = $documentRepo;
		$this->templateRepo = $templateRepo;
	}

	public function create($id)
	{
		$usuario = \Sentry::getUser()->id;

		for ($i = 1; $i <=5; $i++) {

			$type = $this->documentRepo->find($id)->type;
			$permission = $this->templateRepo->find($type);
			$arrData = array(
				'document_id' => $id,
				'permission' => "",
				'id_user' => 0,
				'estado_id' => 1
			);
			switch ($i){
				case 1:
					$arrData['permission'] = $permission->create;
					$arrData['id_user'] = $usuario;
					$arrData['estado_id'] = 3;
					break;
				case 2:
					$arrData['permission'] = $permission->review;
					$arrData['estado_id'] = 2;
					break;
				case 3:
					$arrData['permission'] = $permission->validate;
					break;
				case 4:
					$arrData['permission'] = $permission->authorization;
					break;
				case 5:
					$arrData['permission'] = $permission->agree;
					break;
			}

			$workflow = $this->workflowRepo->newWorkflow();
			$manager = new WorkflowManager($workflow,$arrData);
			$manager->save();
		};

		return Redirect::route('home');
	}

	public function show($id){
		$workflows = $this->workflowRepo->findForDocument($id);
		return View::make('workflow.show',compact('workflows'));
	}

}