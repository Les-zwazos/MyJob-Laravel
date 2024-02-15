<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Admin;
use App\Models\User;
use App\Models\Candidat;
use App\Models\Entreprise;
use App\Models\Recruteur;
use App\Models\Representant;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Validation\Rule;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'type' => ['required', Rule::in(['candidat', 'admin', 'recruteur', 'representant'])],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => $request->type,
        ]);
     
        switch ($request->type) {
            case 'candidat':
                Candidat::create([
                    'user_id' => $user->id,
                ]);
            break;
            case 'recruteur':
                $Recruteur = Recruteur::create([
                    'user_id' => $user->id,
                ]);
                Entreprise::create([
                    'recruteur_id' => $Recruteur->id,
                    
                ]);
                break;
            case 'representant':
                Representant::create([
                    'user_id' => $user->id,
                ]);
                break;
            
            
            
        }


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
