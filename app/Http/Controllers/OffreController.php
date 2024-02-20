<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;
use App\Models\Stage;

class OffreController extends Controller
{
    // toutes les offres
    public function index(){
        $offres = Offre::all();
        return view('offre.index', compact('offres'));

    }
    //toutes les offres de stage
    public function stage(){
        $offres = Offre::where('type', 'stage')->with('stage')->get();
        return view('offre.stage', compact('offres'));
    }
    

    // toutes les offres d'emploi
    public function emploi(){
        $offres = Offre::where('type', 'emploi')->with('emploi')->get();
        return view('offre.emploi', compact('offres'));
    }
    // toutes les offres d'un recruteur specifique
    public function ttMesoffres(){
        return view('recruteur.ttMesOffres');

    }
    // toutes les offres de stage ou emplois d'un recruteur specifique
    public function MesOffres( $type){
        
    }

    

    // create
    public function create($type){
        return view('offre.form', ['type' => $type]);
    }
    
    // store 
    public function store(Request $request)
    {
        // Validation des données du formulaire proprent à 'Offre'
        $request->validate([
            'dateExpiration' => 'required|string|max:255',
            'contenu' => 'required|string|max:255',
            'type' => 'required|string|max:10',
        ]);
    
        // Création de l'offre
        $offre = Offre::create($request->only('dateExpiration', 'contenu', 'type'));
    
        switch ($request->type) {
            case 'stage':
                // Validation des données du formulaire propres à 'stage'
                $request->validate([
                    'dateDebut' => 'required|string|max:255',
                    'duree' => 'required|string|max:255',
                ]);
    
                // Création du stage rattaché
                $offre->stage()->create($request->only('dateDebut', 'duree'));
                break;
    
            case 'emploi':
                // Validation des données du formulaire propres à 'emploi'
                $request->validate([
                    'contrat' => 'required|string|max:255',
                ]);
    
                // Création de l'emploi rattaché
                $offre->emploi()->create($request->only('contrat'));
                break;
        }
    
        return redirect()->to('/offres')->with('success', 'Offre créée avec succès.');
    }
    

    // edit

    // update

    // show

    // destroy



}
