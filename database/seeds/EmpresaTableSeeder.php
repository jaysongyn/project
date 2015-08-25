<?php

use Illuminate\Database\Seeder;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Dmed\Entities\Empresa::truncate();
        factory(\Dmed\Entities\Empresa::class,50)->create();
    }
}
