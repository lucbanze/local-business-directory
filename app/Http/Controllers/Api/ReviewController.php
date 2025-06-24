<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // GET /api/reviews
    public function index()
    {
        return Review::all();
    }

    // GET /api/reviews/{id}
    public function show($id)
    {
        return Review::findOrFail($id);
    }

    // POST /api/reviews
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'business_id' => 'required|exists:businesses,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
            'image' => 'nullable|string',
        ]);

        $review = Review::create($data);
        return response()->json($review, 201);
    }

    // PUT /api/reviews/{id}
    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);

        $data = $request->validate([
            'rating' => 'integer|min:1|max:5',
            'comment' => 'nullable|string',
            'image' => 'nullable|string',
        ]);

        $review->update($data);
        return response()->json($review);
    }

    // DELETE /api/reviews/{id}
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return response()->json(['message' => 'Review deleted successfully']);
    }
}