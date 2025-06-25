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
        $user = $request->user(); // récupère l'utilisateur connecté

        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'category' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'image' => 'nullable|string',
            'approved' => 'boolean'
        ]);

        // Associe automatiquement le business à l'utilisateur connecté
        $data['user_id'] = $user->id;

        $business = Business::create($data);
        return response()->json($business, 201);
    }


    // PUT /api/businesses/{id}
    public function update(Request $request, $id)
    {
        $user = $request->user();
        $business = Business::findOrFail($id);

        // Empêche un utilisateur de modifier un business qui ne lui appartient pas
        if ($business->user_id !== $user->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $data = $request->validate([
            'name' => 'sometimes|required|string',
            'description' => 'nullable|string',
            'category' => 'sometimes|required|string',
            'address' => 'sometimes|required|string',
            'phone' => 'sometimes|required|string',
            'image' => 'nullable|string',
            'approved' => 'boolean'
        ]);

        $business->update($data);
        return response()->json($business);
    }


    // DELETE /api/businesses/{id}
    public function destroy(Request $request, $id)
    {
        $user = $request->user();
        $business = Business::findOrFail($id);

        // Vérifie si l'utilisateur est bien le propriétaire
        if ($business->user_id !== $user->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $business->delete();
        return response()->json(['message' => 'Business deleted successfully']);
    }

}
