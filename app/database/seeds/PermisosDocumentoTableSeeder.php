<?php

use Innaco\Entities\PermisosDocumento;

class PermisosDocumentoTableSeeder extends Seeder {

	public function run()
	{
		PermisosDocumento::create([
			'name'	=> 'Revisar'
		]);

		PermisosDocumento::create([
			'name'	=> 'Aprobar'
		]);
	}

}