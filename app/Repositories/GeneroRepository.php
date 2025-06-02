<?php

namespace App\Repositories;
use App\Models\Genero;
use App\Models\Livro;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GeneroRepository{
    public function get() {
        return Genero::all();
    }

    public function details(int $id) {
        return Genero::findOrFail($id);
    }

    public function store(array $data) {
        return Genero::create($data);
    }

    public function update(int $id, array $data) {
        $genero = $this->details($id);
        $genero->update($data);
        return $genero;
    }

    public function delete(int $id) {
        $genero = $this->details($id);
        $genero->delete();
        return $genero;
    }

    

    public function detailsWithBooks(int $id) {
        return Genero::with('livro')->findOrFail($id);
    } //Usado no Delete
    
    public function gensWithBooks()
    {
        return Genero::with('livro')->get();
    }

    
}