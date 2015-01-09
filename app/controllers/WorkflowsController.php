<?php

use Innaco\Repositories\WorkflowRepo;
use Innaco\Repositories\PermisosDocumentoRepo;
use Innaco\Managers\WorkflowManager;

class WorkflowsController extends \BaseController {

	protected $workflowRepo;
	protected $permisosDocumentoRepo;

	public function __construct(workflowRepo $workflowRepo,permisosDocumentoRepo $permisosDocumentoRepo )
	{
		$this->workflowRepo = $workflowRepo;
		$this->permisosDocumentoRepo = $permisosDocumentoRepo;
	}

	/**
	 * Display a listing of the resource.
	 * GET /workflows
	 *
	 * @return Response
	 */
	public function index($document_id)
	{
		$document = $document_id;
		$permisosDocumentos = $this->permisosDocumentoRepo->findAll();
		$Users =  array('' => 'Seleccione') + DB::table('users')->lists('email','id');
		return View::make('workflow.create', compact('permisosDocumentos', 'Users','document'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /workflows/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$permisosDocumentos = $this->permisosDocumentoRepo->findAll();
		foreach ($permisosDocumentos as $permisoDocumento)
		{
			$permiso = $permisoDocumento->id;
			$usuario = Input::get($permiso);
			$document_id = Input::get('document_id');
			$arrData = array(
				'id_permission' => $permiso,
				'id_user' => $usuario,
				'id_document' => $document_id,
				'estado' => 1
			);

			$workflow = $this->workflowRepo->newWorkflow();
			$manager = new WorkflowManager($workflow,$arrData);
			$manager->save();
		}
		return Redirect::route('home');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /workflows
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /workflows/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /workflows/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /workflows/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /workflows/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}