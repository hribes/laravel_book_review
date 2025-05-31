<?php

namespace App\Services;
use App\Repositories\AutorRepository;
use App\Services\AutorService;

class AutorService{
    private AutorRepository $autorRepository;
    public function __construct(AutorRepository $autorRepository){
        $this->autorRepository=$autorRepository;
    }

    // Adicionar as condições
}