<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Puxar o use de todos os Controllers
//Se não funcionar somente com o use dos Controllers, colocar também as Models



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



route::controller(AutorController::class)->group(function (){
    //Padrões
    Route::get('autor', 'get');
    Route::post('autor', 'store');
    Route::patch('autor', 'update');
    Route::get('autor/{id}', 'details');
    Route::delete('autor/{id}', 'delete');
    //Especificos se houver
});

route::controller(GeneroController::class)->group(function (){
    //Padrões
    Route::get('genero', 'get');
    Route::post('genero', 'store');
    Route::patch('genero', 'update');
    Route::get('genero/{id}', 'details');
    Route::delete('genero/{id}', 'delete');
    //Especificos se houver
});

route::controller(LivroController::class)->group(function (){
    //Padrões
    Route::get('livro', 'get');
    Route::post('livro', 'store');
    Route::patch('livro', 'update');
    Route::get('livro/{id}', 'details');
    Route::delete('livro/{id}', 'delete');
    //Especificos se houver
});

route::controller(ReviewController::class)->group(function (){
    //Padrões
    Route::get('review', 'get');
    Route::post('review', 'store');
    Route::patch('review', 'update');
    Route::get('review/{id}', 'details');
    Route::delete('review/{id}', 'delete');
    //Especificos se houver
});

route::controller(UsuarioController::class)->group(function (){
    //Padrões
    Route::get('usuario', 'get');
    Route::post('usuario', 'store');
    Route::patch('usuario', 'update');
    Route::get('usuario/{id}', 'details');
    Route::delete('usuario/{id}', 'delete');
    //Especificos se houver
});

