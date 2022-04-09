<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposDocumentoSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();
        DB::table('tipos_documentos')->insert([
            [
                'tipo' => "Cédula",
            ],
            [
                'tipo' => "Tarjeta de Identidad",
            ],
            [
                'tipo' => "Pasaporte",
            ]
        ]);
    }
}
