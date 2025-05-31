<?php

namespace App\Services;
use App\Repositories\ReviewRepository;
use App\Services\ReviewService;

class ReviewService{
    private ReviewRepository $reviewRepository;
    public function __construct(ReviewRepository $reviewRepository){
        $this->reviewRepository=$reviewRepository;
    }

    public function get(){
        return $this->reviewRepository->get();
    }

    public function details(int $id){
        return $this->reviewRepository->details($id);
    }

    public function store(array $data){
        return $this->reviewRepository->store($data);
    }

    public function update(int $id, array $data){
        return $this->reviewRepository->update($id, $data);
    }

    public function delete(int $id){
        return $this->reviewRepository->delete($id);
    }
}