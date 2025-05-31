<?php

namespace App\Services;
use App\Repositories\GeneroRepository;
use App\Services\GeneroService;

class GeneroService{
    private GeneroRepository $generoRepository;
    public function __construct(GeneroRepository $generoRepository){
        $this->generoRepository=$generoRepository;
    }

    // Adicionar as condições
}