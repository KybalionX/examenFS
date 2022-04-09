<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('ciudades')->insert([
            [
                'nombre' => "Villavicencio",
            ],
            [
                'nombre' => "Bogotá",
            ],
            [
                'nombre' => "Medellin",
            ]
        ]);
    }
}
