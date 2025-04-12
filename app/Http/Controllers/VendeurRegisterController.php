<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendeur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class VendeurRegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'owner' => 'required|string|max:255',
            'business' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|unique:vendeurs,email',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'password' => 'required|string|min:8',
            'activity' => 'required|string|max:255',
            'days_open' => 'required|array',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $vendeur = Vendeur::create([
                'owner' => $request->owner,
                'business' => $request->business,
                'phone' => $request->phone,
                'email' => $request->email,
                'street' => $request->street,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
                'password' => Hash::make($request->password),
                'activity' => $request->activity,
                'days_open' => json_encode($request->days_open),
                'photo' => $request->file('photo') ? $request->file('photo')->store('vendeurs', 'public') : null
            ]);

            return response()->json([
                'message' => 'Inscription réussie!',
                'redirect' => url('/vendeur/signin')
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur du serveur : ' . $e->getMessage()
            ], 500);
        }
    }
}
