<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;

class OffreController extends Controller
{
    public function index(){
        $offres = Offre::all();
        return view('recruteur.offre.index', compact('offres'));
    }
}
