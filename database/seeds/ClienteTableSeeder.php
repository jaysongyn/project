<?php

use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Dmed\Entities\Cliente::truncate();
        factory(\Dmed\Entities\Cliente::class,20)->create();
    }
}
