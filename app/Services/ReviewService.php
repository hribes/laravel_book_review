<?php

namespace App\Services;
use App\Repositories\ReviewRepository;
use App\Services\ReviewService;

class ReviewService{
    private ReviewRepository $reviewRepository;
    public function __construct(ReviewRepository $reviewRepository){
        $this->reviewRepository=$reviewRepository;
    }

    // Adicionar as condições
}