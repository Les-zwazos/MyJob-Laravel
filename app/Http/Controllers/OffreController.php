<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;

class OffreController extends Controller
{
    // toutes les offres
    public function index(){
        $offres = Offre::all();
        return view('recruteur.offre.index', compact('offres'));
    }

    //toutes les offres de stage
    public function stage(){
        $offres = Offre::where('type', 'stage')->with('stage')->get();
        return view('recruteur.offre.stage', compact('offres'));
    }

    // toutes les offres d'emploi
    public function emploi(){
        $offres = Offre::where('type', 'emploi')->with('emploi')->get();
        return view('recruteur.offre.emploi', compact('offres'));
    }
}
