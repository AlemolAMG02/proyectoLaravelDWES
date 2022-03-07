<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /** @var array[] Array de usuarios activos */
    private $users = array(
        array(['name' => 'Alemol', 'email' => 'ale@ale.com', 'apell' => 'Molero Gomez', 'email_verified_at' => NULL],
            'password' => '$2y$10$4MdN2gZSSQkqh5YXX/bmg.NFeTnueefyHd5GAs.aBt.4hn5EnlXiq', 'remember_token' => NULL),
    );

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('rol')->insert([
            ['name' => 'usuario', 'descripcion' => 'usuario estandar que puede comprar entradas'],
            ['name' => 'admin', 'descripcion' => 'Administrador del sistema'],
        ]);


        /**
         * Creación de artistas de manera aleatoria
         */
        Artist::factory(3)->create();

    }
}
