<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\LivroService;
use App\Http\Requests\LivroStoreRequest;
use App\Http\Requests\LivroUpdateRequest;
use App\Http\Resources\LivroResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class LivroController extends Controller
{
    private LivroService $livroService;
    public function __construct(LivroService $livroService){
        $this->livroService = $livroService;
    }

    //
}
