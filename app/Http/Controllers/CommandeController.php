<?php

namespace App\Http\Controllers;
use App\Models\Commande;
use App\Models\Produit;
use App\Models\contenirs;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $user_id = Auth::user()->id ;
        if(Auth::user()->profil_id == 1){
            $commande = DB::select("SELECT commandes.id as id, date_commande, statut, user_id, SUM(price_commande * quantity) as montant_total
            FROM commandes
            INNER JOIN contenirs ON commandes.id = contenirs.commande
            WHERE date_commande = CURRENT_DATE 
            GROUP BY date_commande, commandes.id order by statut asc;");
        }else {
            $commande = DB::select("SELECT commandes.id as id, date_commande, statut, user_id, SUM(price_commande * quantity) as montant_total
            FROM commandes
            INNER JOIN contenirs ON commandes.id = contenirs.commande
            WHERE user_id = $user_id and date_commande = CURRENT_DATE 
            GROUP BY date_commande, commandes.id order by statut asc;");
        }
        $user= User::all();
        $id = 1;
        return view('CommandePayment', compact('commande', 'user', 'id'));
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
    public function edit($id){

        $Type = DB::select("SELECT price_commande, produit, commandes.created_at as creation, commande, libelle, quantite_disponible, date_commande, image, quantity FROM `contenirs` 
        inner join commandes on commandes.id = contenirs.commande inner join produits on produits.id = contenirs.produit WHERE commande = $id ;") ;

        return response()->json([
            'status'=>200,
            'commande'=>$Type
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $commande = Commande::find($id);
        $commande->statut = 1;
        $commande->update();
        return back();
    }

    public function reset(Request $request, string $id)
    {
        $commande = Commande::find($id);
        $commande->statut = 0;
        $commande->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
