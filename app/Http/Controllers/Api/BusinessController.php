<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    // GET /api/businesses
    public function index()
    {
        return Business::all();
    }

    // GET /api/businesses/{id}
    public function show($id)
    {
        return Business::findOrFail($id);
    }

    // POST /api/businesses
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'category' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'image' => 'nullable|string',
            'approved' => 'boolean'
        ]);
        
        $data['user_id'] = $request->user()->id;// Assuming the user is authenticated and has a user_id
        $business = Business::create($data);
        return response()->json($business, 201);
    }


    // PUT /api/businesses/{id}
    public function update(Request $request, $id)
    {
        $business = Business::findOrFail($id);
        $business->update($request->all());
        return response()->json($business);
    }

    // DELETE /api/businesses/{id}
    public function destroy($id)
    {
        $business = Business::findOrFail($id);
        $business->delete();
        return response()->json(['message' => 'Business deleted successfully']);
    }
}
