<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\ReviewService;
use App\Http\Requests\ReviewStoreRequest;
use App\Http\Requests\ReviewUpdateRequest;
use App\Http\Resources\ReviewResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ReviewController extends Controller
{
    private ReviewService $reviewService;
    public function __construct(ReviewService $reviewService){
        $this->reviewService = $reviewService;
    }

    //
}
