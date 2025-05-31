<?php

namespace App\Services;
use App\Repositories\AutorRepository;

class AutorService{
    private AutorRepository $autorRepository;
    public function __construct(AutorRepository $autorRepository){
        $this->autorRepository=$autorRepository;
    }

    public function get(){
        return $this->autorRepository->get();
    }

    public function details(int $id){
        return $this->autorRepository->details($id);
    }

    public function store(array $data){
        return $this->autorRepository->store($data);
    }

    public function update(int $id, array $data){
        return $this->autorRepository->update($id, $data);
    }

    public function delete(int $id){
        return $this->autorRepository->delete($id);
    }

    public function AuthorsWithBooks()
    {
        return $this->autorRepository->AuthorsWithBooks();
    }
}
