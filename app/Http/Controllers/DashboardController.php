<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\contenirs;
use App\Models\Commande;
use App\Models\Produit;
use Carbon\Carbon;
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
        $nbre_commandes = DB::select("SELECT count(user_id) AS nbre FROM commandes WHERE user_id = $user_id and date_commande = CURRENT_DATE;");
        $sous_categorie = DB::select("SELECT * FROM `sous_categories`");
        $commande = DB::select("SELECT date_commande, user_id, SUM(price_commande) as montant_total, SUM(quantity) as quantite_total
        FROM commandes
        INNER JOIN contenirs ON commandes.id = contenirs.commande
        WHERE user_id = $user_id and date_commande = CURRENT_DATE
        GROUP BY date_commande, user_id;");
        $produits = DB::select("SELECT produits.id as ids, price, produits.libelle as libelle, categories.id as id_categorie,
         sous_categories.libelle as sous_categories , categories.libelle as categories
         FROM produits INNER join sous_categories on produits.type = sous_categories.id 
         inner join categories on categories.id = sous_categories.categorie;");
        return view('acceuil',compact('commande','user', 'nbre_commandes', 'produits', 'sous_categorie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function GetProduit($idProduit){

        $Type =Produit::where('type', $idProduit)->get();

        return response()->json([
            'status'=>200,
            'Type'=>$Type
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dateActuelle = Carbon::now();

        $commande = Commande::create([
             'date_commande' => $dateActuelle,
             'user_id' => Auth::user()->id,
         ]);
         for ($j = 0; $j < count($request->produit); $j++) {
             contenirs::create([
                 'commande' => $commande->id,
                 'produit' => $request->produit[$j],
                 'quantity' => $request->quantity[$j],
                 'price_commande' => $request->price[$j],
             ]);
         }
         
         
         return back()->with(['success' => 'commande effectuée avec succès.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
