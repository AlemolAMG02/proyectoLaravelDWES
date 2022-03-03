<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /** @var array[] Array de usuarios activos */
    private $users = array(
        array(['name' => 'Alemol', 'email' => 'ale@alemol.com', 'apell' => 'Molero Gomez', 'email_verified_at' => NULL],
            'password' => '$2y$10$4MdN2gZSSQkqh5YXX/bmg.NFeTnueefyHd5GAs.aBt.4hn5EnlXiq', 'remember_token' => NULL),
        array(['name' => 'Usuario', 'email' => 'user@user.com', 'email_verified_at' => NULL],
            'password' => '25f9e794323b453885f5181f1b624d0b', 'remember_token' => NULL),
    );

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


    }
}
