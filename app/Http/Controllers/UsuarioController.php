<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\UsuarioService;
use App\Http\Requests\UsuarioStoreRequest;
use App\Http\Requests\UsuarioUpdateRequest;
use App\Http\Resources\UsuarioResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UsuarioController extends Controller
{
    private UsuarioService $usuarioService;
    public function __construct(UsuarioService $usuarioService){
        $this->usuarioService = $usuarioService;
    }

    //
}
