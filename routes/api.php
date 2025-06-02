<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UsuarioController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



route::controller(AutorController::class)->group(function (){

    Route::get('autor', 'get');
    Route::post('autor', 'store');
    Route::get('autor/livros', 'AuthorsWithBooks'); //Listar autores com seus livros
    Route::patch('autor/{id}', 'update');
    Route::get('autor/{id}', 'details');
    Route::delete('autor/{id}', 'delete');

    Route::get('autor/livro/{id}', 'findBookWithAuthor'); //Listar todos os livros de um autor
    
});

route::controller(GeneroController::class)->group(function (){

    Route::get('genero', 'get');
    Route::post('genero', 'store');
    Route::get('genero/livro', 'gensWithBooks');//Listar todos os gêneros com seus livros
    Route::patch('genero/{id}', 'update');
    Route::get('genero/{id}', 'details');
    Route::delete('genero/{id}', 'delete');

    Route::get('genero/livro/{id}', 'findBooksWithGen');//Listar todos os livros de um gênero
    
});

route::controller(LivroController::class)->group(function (){

    Route::get('livro', 'get');
    Route::post('livro', 'store');
    Route::get('livro/allInfo', 'livroAll');//Listar livros com seus reviews, autor e gênero
    Route::patch('livro/{id}', 'update');
    Route::get('livro/{id}', 'details');
    Route::delete('livro/{id}', 'delete');

    Route::get('livro/review/{id}', 'livroWithReview');//Listar reviews de um livro
    
});

route::controller(ReviewController::class)->group(function (){

    Route::get('review', 'get');
    Route::post('review', 'store');
    Route::patch('review/{id}', 'update');
    Route::get('review/{id}', 'details');
    Route::delete('review/{id}', 'delete');

});

route::controller(UsuarioController::class)->group(function (){

    Route::get('usuario', 'get');
    Route::post('usuario', 'store');
    Route::patch('usuario/{id}', 'update');
    Route::get('usuario/{id}', 'details');
    Route::delete('usuario/{id}', 'delete');

    Route::get('usuario/review/{id}', 'userWithReview');//Listar reviews de um usuário
});

