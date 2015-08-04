<?php

use Illuminate\Database\Seeder;

class UserEmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Dmed\Entities\UserEmpresa::truncate();
        factory(\Dmed\Entities\UserEmpresa::class,10)->create();

    }
}
