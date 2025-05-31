<?php

namespace App\Services;
use App\Repositories\UsuarioRepository;
use App\Services\UsuarioService;

class UsuarioService{
    private UsuarioRepository $usuarioRepository;
    public function __construct(UsuarioRepository $usuarioRepository){
        $this->usuarioRepository=$usuarioRepository;
    }

    public function get(){
        return $this->usuarioRepository->get();
    }

    public function details(int $id){
        return $this->usuarioRepository->details($id);
    }

    public function store(array $data){
        return $this->usuarioRepository->store($data);
    }

    public function update(int $id, array $data){
        return $this->usuarioRepository->update($id, $data);
    }

    public function delete(int $id){
        return $this->usuarioRepository->delete($id);
    }
}