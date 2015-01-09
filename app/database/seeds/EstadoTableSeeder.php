<?php

use Innaco\Entities\Estado;

class EstadoTableSeeder extends Seeder {

	public function run()
	{
		Estado::create([
			'name'	=> 'Pendiente',
		]);
		Estado::create([
			'name'	=> 'Revisado',
		]);
		Estado::create([
			'name'	=> 'Aprobado',
		]);
		Estado::create([
			'name'	=> 'Rechazado',
		]);
	}

}