<?php

use Illuminate\Database\Seeder;

class NotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \Dmed\Entities\Nota::truncate();
        factory(\Dmed\Entities\Nota::class,100)->create();
    }
}
