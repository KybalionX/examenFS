<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\Ciudad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        return Usuario::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUsuarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsuarioRequest $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario) {
        //
        return $usuario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsuarioRequest  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario) {
        //
        $usuario = Usuario::find($request['id']);
        $usuario->nombres = $request->get('nombres');
        $usuario->apellidos = $request->get('apellidos');
        $usuario->correo = $request->get('correo');
        $usuario->tipo_documento = $request->get('tipo_documento');
        $usuario->documento = $request->get('documento');
        $usuario->fecha_nacimiento = $request->get('fecha_nacimiento');
        $usuario->ciudad_nacimiento = $request->get('ciudad_nacimiento');
        $usuario->contrasenia = $request->get('contrasenia');
        $saved = $usuario->save();

        if ($saved) {
            $response['icon'] = "success";
            $response['text'] = "Usuario actualizado correctamente";
        } else {
            $response['icon'] = "success";
            $response['text'] = "Error al actualizar el usuarios";
        }

        echo json_encode($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario) {
        $user = Usuario::find($usuario['id']);
        $result = $user->delete();
        if ($result) {
            $response['icon'] = "success";
            $response['text'] = "Usuario eliminado correctamente";
        } else {
            $response['icon'] = "error";
            $response['text'] = "No se ha podido eliminar el usuario";
        }
        echo json_encode($response);
    }
}
