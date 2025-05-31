<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\AutorService;
use App\Http\Requests\AutorStoreRequest;
use App\Http\Requests\AutorUpdateRequest;
use App\Http\Resources\AutorResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AutorController extends Controller
{
    private AutorService $autorService;
    public function __construct(AutorService $autorService){
        $this->autorService = $autorService;
    }

    public function get(){
        $autor = $this->autorService->get();
        return AutorResource::collection($autor);
    }

    public function store(AutorStoreRequest $request){
        $data = $request->validated();
        $autor = $this->autorService->store($data);
        return new AutorResource($autor);
    }

    public function details(int $id){
        try{
            $autor = $this->autorService->details($id);
        }catch(ModelNotFoundException $e){
            return response()->json(['error'=>'Autor not found'], 404);
        }
        return new AutorResource($autor);
    }

    public function update(int $id,AutorUpdateRequest $request){
        $data = $request->validated();
        try{
            $autor = $this->autorService->update($id, $data);
        }catch(ModelNotFoundException $e){
            return response()->json(['error'=>'Autor not found'], 404);
        }
        return new AutorResource($autor);
    }

    public function delete(int $id){
        try{
            $autor = $this->autorService->delete($id);
        }catch(ModelNotFoundException $e){
            return response()->json(['error'=>'Autor not found'], 404);
        }
        return new AutorResource($autor);
    }

    public function findBookWithAuthor($id)
    {
        try {
            $autor = $this->autorService->details($id);
            $livros = $autor->livros; 
            return LivroResource::collection($livros);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Autor não encontrado'], 404);
        }
    }

    public function AuthorsWithBooks()
    {
        $autores = $this->autorService->AuthorsWithBooks();
        return AutorResource::collection($autores);
    }
}
