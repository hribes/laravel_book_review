<?php

namespace App\Services;
use App\Repositories\LivroRepository;
use App\Services\LivroService;

class LivroService{
    private LivroRepository $livroRepository;
    public function __construct(LivroRepository $livroRepository){
        $this->livroRepository=$livroRepository;
    }

    public function get(){
        return $this->livroRepository->get();
    }

    public function details(int $id){
        return $this->livroRepository->details($id);
    }

    public function store(array $data){
        return $this->livroRepository->store($data);
    }

    public function update(int $id, array $data){
        return $this->livroRepository->update($id, $data);
    }

    public function delete(int $id){
        return $this->livroRepository->delete($id);
    }

    public function livroAll()
    {
        return $this->livroRepository->livroAll();
    }

}