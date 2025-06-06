<?php

namespace App\Services;
use App\Repositories\LivroRepository;
use App\Models\Usuario;
use App\Models\Review;
use App\Repositories\ReviewRepository;; 

class LivroService{
    private LivroRepository $livroRepository;
    private ReviewRepository $reviewRepository;
    
    public function __construct(
        LivroRepository $livroRepository,
        ReviewRepository $reviewRepository 
    ){
        $this->livroRepository = $livroRepository;
        $this->reviewRepository = $reviewRepository; 
    }

    public function get(){
        return $this->livroRepository->get();
    }

    public function details(int $id){
        return $this->livroRepository->details($id);
    }

    public function store(array $data){
        return $data = $this->livroRepository->store($data);
    }

    public function update(int $id, array $data){
        return $this->livroRepository->update($id, $data);
    }

    public function delete(int $id){
        $livro = $this->livroRepository->detailsWithReviews($id);
        $reviews = $livro->review; 

        foreach($reviews as $review){
            $this->reviewRepository->delete($review->id);
        }
        return $this->livroRepository->delete($id);
    }


    public function livroAll()
    {
        return $this->livroRepository->livroAll();
    }
}
