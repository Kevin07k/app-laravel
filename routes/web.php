<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});
//
Route::post("/persona/{id}/asignar",[PersonaController::class,'asignarPersona']);

// CRUD PERSONA
// listar (GET)
Route::get("/persona", [PersonaController::class, "funListar"]);
// crear  (GET)
Route::get("/persona/crear", [PersonaController::class, "funCrear"]);
// guardar (POST)
Route::post("/persona", [PersonaController::class, "funGuardar"]);
// mostrar (GET)
Route::get("/persona/{id}", [PersonaController::class, "funMostrar"]);
// editar (GET)
Route::get("/persona/{id}", [PersonaController::class, "funEditar"]);
// modificar (PUT)
Route::put("/persona/{id}", [PersonaController::class, "funModificar"]);
// eliminar (DELETE)
Route::delete("/persona/{id}", [PersonaController::class, "funEliminar"]);


// CRUD Usuarios
Route::resource("/usuario", UsuarioController::class);
