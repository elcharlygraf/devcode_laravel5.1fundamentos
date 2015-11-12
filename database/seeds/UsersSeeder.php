<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{

    public function run()
    {

    DB::table('users')->insert(
		array(
			array(
				'name'=>'Juan Carlos',
				'email' => 'juan.gonzales@gmail.com',
				'password' => bcrypt('secret'),
				'rol_id' => 1
				),
			array(
				'name'=>'Juan Carlos',
				'email' => 'juan@gmail.com',
				'password' => bcrypt('secret'),
				'rol_id' => 1
				),
		));
    }
}
