<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('TemplateTableSeeder');
		$this->call('EstadoTableSeeder');
		$this->call('PermisosDocumentoTableSeeder');

	}

}
