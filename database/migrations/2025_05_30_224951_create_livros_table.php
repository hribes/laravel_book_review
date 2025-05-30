<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('sinopse')->nullable();
            $table->unsignedBigInteger('genero_id');
            $table->unsignedBigInteger('autor_id');
            $table->timestamps();

            
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade');
            $table->foreign('autor_id')->references('id')->on('autors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
