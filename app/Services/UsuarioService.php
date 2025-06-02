<?php

namespace App\Services;
use App\Models\Usuario;
use App\Models\Review;
use App\Repositories\UsuarioRepository;
use App\Services\ReviewService;

class UsuarioService{
    private UsuarioRepository $usuarioRepository;
    private ReviewService $reviewService;
    public function __construct(UsuarioRepository $usuarioRepository, ReviewService $reviewService){
        $this->usuarioRepository=$usuarioRepository;
        $this->reviewService = $reviewService;
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
        $usuario = $this->usuarioRepository->detailsWithReviews($id);
        $reviews = $usuario->review; 

        foreach($reviews as $review){
            $this->reviewService->delete($review->id);
        }
        return $this->usuarioRepository->delete($id);
    }

    public function userWithReview(int $id){
        return $this->usuarioRepository->detailsWithReviews($id);
    }

}