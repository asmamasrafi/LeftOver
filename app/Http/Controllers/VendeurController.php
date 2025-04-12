<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendeur;
use Hash;
use Validator;

class VendeurController extends Controller
{
    // Affichage du formulaire d'inscription
    public function showForm()
    {
        return view('vendeur.inscription'); // Nom de ta vue
    }
}