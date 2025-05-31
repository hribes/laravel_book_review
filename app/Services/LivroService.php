<?php

namespace App\Services;
use App\Repositories\LivroRepository;
use App\Services\LivroService;

class LivroService{
    private LivroRepository $livroRepository;
    public function __construct(LivroRepository $livroRepository){
        $this->livroRepository=$livroRepository;
    }

    // Adicionar as condições
}