<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        
        $user= DB::select("SELECT count(id) as numbers FROM users");
        $user_id = Auth::user()->id;
        $commande = DB::select("SELECT date_commande, user_id, SUM(price_commande) as montant_total, SUM(quantity) as quantite_total
        FROM commandes
        INNER JOIN contenirs ON commandes.id = contenirs.commande
        WHERE user_id = $user_id and date_commande = CURRENT_DATE
        GROUP BY date_commande, user_id;");
        return view('acceuil',compact('commande','user'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
