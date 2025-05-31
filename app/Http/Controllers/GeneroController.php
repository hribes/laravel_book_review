<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\GeneroService;
use App\Http\Requests\GeneroStoreRequest;
use App\Http\Requests\GeneroUpdateRequest;
use App\Http\Resources\GeneroResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GeneroController extends Controller
{
    private GeneroService $generoService;
    public function __construct(GeneroService $generoService){
        $this->generoService = $generoService;
    }

    //
}
