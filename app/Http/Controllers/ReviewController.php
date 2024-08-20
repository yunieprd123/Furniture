<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    
    public function index()
    {
        $data['reviews'] = Transaksi::with('reviews')->latest()->get();
        
        return view('admin.review.review-index',$data);
    }
}
