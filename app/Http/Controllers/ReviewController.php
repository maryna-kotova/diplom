<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{  
    public function saveReview(Request $request)
    {
        $validated = $request->validate([
            'nameReviews' => 'required|min:3|max:55',            
            'review'      => 'required|min:3|max:1000',
        ]);
        $review = new Review();
        $review->name = $request->nameReviews;
        $review->review = $request->review;
        if($_POST['article_id']){
            $review->article_id = $request->article_id;
            $review->save();
        }
        $review->save();
        
        return back()->with('success', 'Thanks!');
    }
}
