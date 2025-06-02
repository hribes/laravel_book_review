<?php

namespace App\Models;
use App\Models\Review;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livros';
    protected $fillable = ['titulo', 'sinopse', 'genero_id', 'autor_id'];


    public function genero(){
        return $this->belongsTo(
            Genero::class,'genero_id','id'
        );
    }

    public function autor(){
        return $this->belongsTo(
            Autor::class,'autor_id','id'
        );
    }

    public function review(){
        return $this->hasMany(
            Review::class, 'livro_id', 'id'
        );
    }
}
