<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\LivroService;
use App\Http\Requests\LivroStoreRequest;
use App\Http\Requests\LivroUpdateRequest;
use App\Http\Resources\LivroResource;
use App\Http\Resources\ReviewResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class LivroController extends Controller
{
    private LivroService $livroService;
    public function __construct(LivroService $livroService){
        $this->livroService = $livroService;
    }

    public function get()
    {
        $livros = $this->livroService->get();
        return LivroResource::collection($livros);
    }

    public function store(LivroStoreRequest $request)
    {
        $data = $request->validated();
        $livro = $this->livroService->store($data);
        return new LivroResource($livro);
    }

    public function details(int $id)
    {
        try {
            $livro = $this->livroService->details($id);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Livro não encontrado'], 404);
        }
        return new LivroResource($livro);
    }

    public function update(int $id, LivroUpdateRequest $request)
    {
        $data = $request->validated();
        try {
            $livro = $this->livroService->update($id, $data);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Livro não encontrado'], 404);
        }
        return new LivroResource($livro);
    }

    public function delete(int $id){
        try{
            $livro = $this->livroService->delete($id);
        }catch(ModelNotFoundException $e){
            return response()->json(['error'=>'Livro não encontrado'], 404);
        }
        return new LivroResource($livro);
    }

    public function livroWithReview($id)
    {
        try {
            $livro = $this->livroService->details($id);
            $reviews = $livro->review;
            return ReviewResource::collection($reviews); 
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Livro não encontrado'], 404);
        }
    }

    public function livroAll()
    {
        $livros = $this->livroService->livroAll();
        return LivroResource::collection($livros);
    }
}
