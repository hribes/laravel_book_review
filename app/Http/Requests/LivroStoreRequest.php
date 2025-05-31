<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:255',
            'sinopse' => 'required|string|max:2048',
            'genero_id' => 'required|exists:generos,id',
            'autor_id' => 'required|exists:autors,id',
        ];
    }
}
