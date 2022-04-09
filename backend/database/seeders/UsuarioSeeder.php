<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('Usuarios')->insert([
            [
                'ciudad_nacimiento' => 1,
                'tipo_documento' => 1,
                'documento' => "123456",
                "nombres" => "Nicolás Eduardo",
                "apellidos" => "Flórez Acosta",
                "fecha_nacimiento" => Carbon::createFromFormat('d/m/Y', "19/05/2002")->format('Y-m-d'),
                "correo" => "nicolaseduardoflorez1@gmail.com",
                "contrasenia" => "123"
            ],
            [
                'ciudad_nacimiento' => 1,
                'tipo_documento' => 1,
                'documento' => "6789",
                "nombres" => "Usuario",
                "apellidos" => "De prueba",
                "fecha_nacimiento" => Carbon::createFromFormat('d/m/Y', "05/05/2001")->format('Y-m-d'),
                "correo" => "usuarioprueba@gmail.com",
                "contrasenia" => "456"
            ]
        ]);
    }
}
