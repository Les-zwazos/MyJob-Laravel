<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;

class EntrepriseController extends Controller
{
    public function index(){
        $entreprises = Entreprise::all();
        return view('entreprise.index', compact($entreprises));
    }



    public function store(Request $request){

    }


    public function update(Request $request, $id){
        
    }

}
