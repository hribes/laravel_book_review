<?php

namespace App\Services;
use App\Repositories\UsuarioRepository;
use App\Services\UsuarioService;

class UsuarioService{
    private UsuarioRepository $usuarioRepository;
    public function __construct(UsuarioRepository $usuarioRepository){
        $this->usuarioRepository=$usuarioRepository;
    }

    // Adicionar as condições
}