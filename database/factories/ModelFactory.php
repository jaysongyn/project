<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Dmed\Entities\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'cliente_id' => $faker->numberBetween(1,10),
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

/** @var TYPE_NAME $factory */
$factory->define(Dmed\Entities\Cliente::class, function ($faker) {
    return [
        'name' => $faker->name,
        'cnpj' => $faker->numberBetween('10000000000000', '99999999999999'),

    ];
});

$factory->define(Dmed\Entities\Empresa::class, function ($faker) {
    return [
        'name' => $faker->name,
        'cnpj' => $faker->numberBetween('10000000000000', '99999999999999'),
        'cliente_id' => $faker->numberBetween(1,10)
    ];
});

$factory->define(Dmed\Entities\UserEmpresa::class, function ($faker) {
    return [

        'user_id' => $faker->numberBetween('1', '10'),
        'empresa_id' => $faker->numberBetween('1', '10')

    ];
});

/** @var TYPE_NAME $factory */
$factory->define(Dmed\Entities\Nota::class, function ($faker) {
    return [
        'numero' => $faker->numberBetween('3588', '48889'),
        'empresa_id' => $faker->numberBetween('1', '10'),
        'data_emissao' => $faker->DateTime(),
        'valor' => $faker->randomFloat('2'),
        'discriminacao' => $faker->text(),
        'cpf_tomador' => $faker->numberBetween('10000000000', '99999999999'),
        'nome_tomador' => $faker->name(),
        'cpf_tomador' =>  $faker->numberBetween('10000000000', '99999999999'),
        'nome_dependente' => $faker->name(),
        'data_nasc_dependente' => $faker->date()

    ];
});