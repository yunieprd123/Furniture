<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    
    public function index()
    {
        $data['reviews'] = Review::all();
        
        return view('admin.review.review-index',$data);
    }
}
