<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $productId)
    {


        // Validate incoming request
        $validated = $request->validate([
            'comment_title' => 'required|string|max:255',
            'comment_description' => 'required|string',
            'rating' => 'required|in:bad,not bad,better,amazing',
        ]);

        // Map rating to rating points
        $ratingPointsMap = [
            'bad' => 1,
            'not bad' => 2,
            'better' => 4,
            'amazing' => 5,
        ];

        // Set the product_id and user_id manually
        $validated['product_id'] = $productId;
        $validated['user_id'] = $request->user()->id;

        // Set the rating points based on the rating
        $validated['rating_points'] = $ratingPointsMap[$validated['rating']];

        // Create a new comment
        Comment::create($validated);

        return redirect()->route('product.show', $productId)->with('success', 'Comment added successfully!');
    }
}
