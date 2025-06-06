<?php

namespace App\Services;
use App\Models\Genero;
use App\Models\Livro;
use App\Repositories\GeneroRepository;
use App\Services\GeneroService;
use App\Repositories\LivroRepository;


class GeneroService {
    private GeneroRepository $generoRepository;
    private LivroRepository $livroRepository;

    public function __construct(GeneroRepository $generoRepository, LivroRepository $livroRepository) {
        $this->generoRepository = $generoRepository;
        $this->livroRepository = $livroRepository;
    }

    public function get(){
        return $this->generoRepository->get();
    }

    public function details(int $id){
        return $this->generoRepository->details($id);
    }

    public function store(array $data){
        return $this->generoRepository->store($data);
    }

    public function update(int $id, array $data){
        return $this->generoRepository->update($id, $data);
    }

    public function delete(int $id){
        $genero = $this->generoRepository->detailsWithBooks($id);
        $livros = $genero->livro;

        foreach($livros as $livro){
            $this->livroRepository->desvincular($livro->id);
        }
        return $this->generoRepository->delete($id);
    }

    public function gensWithBooks() 
    {
        return $this->generoRepository->gensWithBooks(); 
    }
}