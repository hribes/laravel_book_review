<?php

namespace App\Services;
use App\Models\Autor;
use App\Models\Livro;
use App\Repositories\AutorRepository;
use App\Repositories\LivroRepository;

class AutorService{
    private AutorRepository $autorRepository;
    private LivroRepository $livroRepository;
    public function __construct(AutorRepository $autorRepository, LivroRepository $livroRepository){
        $this->autorRepository=$autorRepository;
        $this->livroRepository = $livroRepository;
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
        $autor = $this->details($id); // Busca o autor
        $livros = $autor->livro; // Busca os livros do autor
        foreach($livros as $livro){
            $this->livroRepository->delete($livro->id);  //Para cada livro fazemos a deleção
        }
        return $this->autorRepository->delete($id);
    }



    public function authorsWithBooks() 
    {
        return $this->autorRepository->authorsWithBooks(); 
    }
}
