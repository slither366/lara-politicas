<?php

use Faker\Generator as Faker;
use App\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        //'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'verified' => $verificado = $faker->randomElement([User::USUARIO_VERIFICADO,User::USUARIO_NO_VERIFICADO]),
        'verification_token' => $verificado == User::USUARIO_VERIFICADO ? null : User::generarVerificationToken(),
        'admin' => $faker->randomElement([User::USUARIO_ADMINISTRADOR, User::USUARIO_REGULAR]),
    ];    

});

$factory->define(App\DepositoPendiente::class, function (Faker $faker) {

    return [
		'cod_local' => $faker->numberBetween(100,999),
		'dia_mes' => $faker->randomElement($array = array ('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo')),
		'fecha_mes' => '2018/10/31',
		'num_doc_jef_zona' => $faker->randomElement($array = array ('44752002','12345678','44123456','98765432','32165498','12312345','96385274', '44752033','12345699','44123488','98765477','32165411','12312322','96385233','44123111','98765222','32165444','12312555','96385666','96385988')),
    ];

});