<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nota' => $this->nota,
            'texto' => $this->texto,
            // Inclui o livro, se carregado
            'livro' => new LivroResource($this->whenLoaded('livro')),
            // Inclui o usuário, se carregado
            'usuario' => new UsuarioResource($this->whenLoaded('usuario')),
        ];
    }
}
