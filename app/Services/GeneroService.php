<?php

namespace App\Services;
use App\Repositories\GeneroRepository;
use App\Services\GeneroService;

class GeneroService{
    private GeneroRepository $generoRepository;
    public function __construct(GeneroRepository $generoRepository){
        $this->generoRepository=$generoRepository;
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

    public function delete(int $id)
    {
        $genero = $this->details($id);
        // Desvincula todos os livros do gênero
        foreach ($genero->livros as $livro) {
            $livro->genero_id = null;
            $livro->save();
        }
        return $this->generoRepository->delete($id);
    }


    public function generoWithBooks()
    {
        return $this->generoRepository->generoWithBooks();
    }
}