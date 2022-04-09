<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/users', function(Request $request){
    return "magia";
});

Route::resource('usuarios', UsuarioController::class);


Route::get('ciudades', function() {
    return DB::table('ciudades')->get();
});

Route::get('tiposdocumentos', function() {
    return DB::table('tipos_documentos')->get();
});
