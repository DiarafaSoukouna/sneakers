<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login (Request $request) 
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Tenter de connecter l'utilisateur
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // L'authentification a réussi, redirigez l'utilisateur vers la page souhaitée
            if (Auth::user()->first_connect == 1) {
                return redirect()->intended('/Dashboard');
            }
             else 
            {
                return redirect()->route('first_connect');
            }
             

        } else {
            // L'authentification a échoué, redirigez l'utilisateur vers la page de connexion avec un message d'erreur
            return back()->withErrors(['error' => 'Adresse e-mail ou mot de passe incorrect.']);
        }
    }
    public function first_connect(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->password);
        $user->first_connect = 1;

        $user->update();

        return redirect()->intended('/Dashboard');
    }
    public function logout()
    {
        Auth::logout(); // Déconnecte l'utilisateur
        return redirect('/'); // Redirige l'utilisateur vers la page d'accueil ou toute autre page souhaitée
    }
}
