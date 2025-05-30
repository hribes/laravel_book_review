<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autors';
    protected $fillable = ['nome', 'data_nascimento', 'biografia'];

    public function livro(){
        return $this->hasMany(
            Livro::class, 'autor_id', 'id'
        );
    }
}
