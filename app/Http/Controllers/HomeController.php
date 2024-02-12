<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index (){
        if (auth::id()) {
            $type = Auth()->user()->type;
           if ($type=='candidat') {
                return view('candidat.index');  

        }else if ($type=='recruteur') {
            return view('recruteur.index');
        
    }else if ($type=='representant') {
        return view('representant.index');
    
}else if ($type=='admin') {
    return view('admin.index');
}
            
            
            
            
            else{ 
                return redirect()->back();
            }
        }
    }
}
