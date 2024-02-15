<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;

class EntrepriseController extends Controller
{
    public function index()
    {
        // Récupérer toutes les entreprises
        $entreprises = Entreprise::all();
        // Retourner la vue avec les données des entreprises
        return view('entreprise.index', compact('entreprises'));
    }

    public function store(Request $request)
    {
        // Valider les données de la requête
        $request->validate([
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'contact' => 'string|max:255',
        ]);


        $entreprise = new Entreprise();
        $entreprise->nom = $request->nom;
        $entreprise->adresse = $request->adresse;
        $entreprise->contact = $request->contact;
        

        $entreprise->save();


        return redirect()->route('entreprise.index')->with('success', 'Entreprise ajoutée avec succès.');
    }

    public function update(Request $request, $id)
    {
        // Valider les données de la requête
        $request->validate([
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'contact' => 'string|max:255',
        ]);

        // Trouver l'entreprise à mettre à jour
        $entreprise = Entreprise::findOrFail($id);

        // Mettre à jour les données de l'entreprise
        $entreprise->nom = $request->nom;
        $entreprise->adresse = $request->adresse;
        $entreprise->contact = $request->contact;

        // Sauvegarder les modifications dans la base de données
        $entreprise->save();

        // Rediriger vers la page d'index des entreprises avec un message de succès
        return redirect()->route('entreprise.index')->with('success', 'Entreprise mise à jour avec succès.');
    }

}
