<?php

use Illuminate\Database\Seeder;
use App\User;
use App\DepositoPendiente;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        DepositoPendiente::truncate();

        $cantidadUsuarios = 10;
        $cantidadDepPend = 20;

        factory(User::class, $cantidadUsuarios)->create();
        factory(DepositoPendiente::class, $cantidadUsuarios)->create();


    }
}
