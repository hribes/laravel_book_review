<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UsuarioController;
//Puxar o use de todos os Controllers
//Se não funcionar somente com o use dos Controllers, colocar também as Models



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



route::controller(AutorController::class)->group(function (){
    //Padrões
    Route::get('autor', 'get');
    Route::post('autor', 'store');
    Route::get('autor/livros', 'AuthorsWithBooks');
    Route::patch('autor/{id}', 'update');
    Route::get('autor/{id}', 'details');
    Route::delete('autor/{id}', 'delete');
    //Especificos se houver
    Route::get('autor/livro/{id}', 'findBookWithAuthor');
    
});

route::controller(GeneroController::class)->group(function (){
    //Padrões
    Route::get('genero', 'get');
    Route::post('genero', 'store');
    Route::get('genero/livro', 'gensWithBooks');
    Route::patch('genero/{id}', 'update');
    Route::get('genero/{id}', 'details');
    Route::delete('genero/{id}', 'delete');
    //Especificos se houver
    Route::get('genero/livro/{id}', 'findBooksWithGen');
    
});

route::controller(LivroController::class)->group(function (){
    //Padrões
    Route::get('livro', 'get');
    Route::post('livro', 'store');
    Route::get('livro/allInfo', 'livroAll');
    Route::patch('livro/{id}', 'update');
    Route::get('livro/{id}', 'details');
    Route::delete('livro/{id}', 'delete');
    //Especificos se houver
    Route::get('livro/review/{id}', 'livroWithReview');
    
});

route::controller(ReviewController::class)->group(function (){
    //Padrões
    Route::get('review', 'get');
    Route::post('review', 'store');
    Route::patch('review/{id}', 'update');
    Route::get('review/{id}', 'details');
    Route::delete('review/{id}', 'delete');
    //Especificos se houver
});

route::controller(UsuarioController::class)->group(function (){
    //Padrões
    Route::get('usuario', 'get');
    Route::post('usuario', 'store');
    Route::patch('usuario/{id}', 'update');
    Route::get('usuario/{id}', 'details');
    Route::delete('usuario/{id}', 'delete');
    //Especificos se houver
    Route::get('usuario/review/{id}', 'userWithReview');
});

