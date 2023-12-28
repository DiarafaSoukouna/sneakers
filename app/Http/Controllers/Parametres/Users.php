<?php

namespace App\Http\Controllers\Parametres;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $user = User::all();
        $profil = DB::select('SELECT * from profils');
        return view('Parametre/Users', compact('user', 'profil'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'phone' => $request->phone,
            'email' => $request->email,
            'profil_id' => $request->profil_id,
            'password' => Hash::make('12345'),
            'first_connect' => 0,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
         return response()->json([
         'satuts'=>2000,
         'user'=>$user,
         ]);
    }
    // Profil page
    public function profil()
    {
        $user= User::find(Auth::user()->id);
        $profil = DB::select('SELECT * from profils');
        return view('Parametre/Profil',
        compact('user', 'profil'));
    }
    // Update PASSWORD  
    public function password(Request $request)
    {
        $validatedData =$this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::user()->id);
        if (Hash::check($request->old_password, auth()->user()->password)) {
            // Mettez à jour le mot de passe
            auth()->user()->update([
                'password' => Hash::make($request->password),
            ]);
    
            return redirect()->back()->with('success', 'Mot de passe mis à jour avec succès.');
        } else {
            return back()->withErrors(['error' => 'Adresse e-mail ou mot de passe incorrect.'])->withInput();
        }
        // $user->password = Hash::make($request->new_password);

        // $user->update();

        // return redirect()->intended('/Dashboard');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $user = User::find($id);
            $user->name = $request->name;
            $user->firstname = $request->firstname;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->profil_id = $request->profil_id;
            $user->update();

            return redirect()->back();
    }
    public function reset(Request $request, string $id)
    {
            $user = User::find($id);
            $user->password = Hash::make($request->password_reset);
            $user->first_connect = 0;
            $user->update();

            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $user= User::find($id);
        $user->delete();
        return  redirect()->back()->with('success', 'Utilisateur supprimer avec success');
    }
}
