<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Dmed\Entities\User::truncate();
        factory(\Dmed\Entities\User::class,10)->create();

    }
}
