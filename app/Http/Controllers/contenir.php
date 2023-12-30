<?php

namespace App\Http\Controllers;
use App\Models\SousCategorie;
use App\Models\Produit;
use App\Models\contenirs;
use App\Models\Commande;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class contenir extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    
        $user_id = Auth::user()->id;
        $commande = DB::select("SELECT `date_commande`, user_id,sum(price_commande) as montant_total, sum(quantity) as quantite_total FROM `commandes` inner join contenirs on commandes.id = contenirs.commande WHERE user_id = $user_id GROUP by commandes.id;");
        $SousCategorie = SousCategorie::all();
        $user= User::all();
        return view('commande', compact('SousCategorie', 'commande', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function GetType($id_f){

        $Type =Produit::where('type', $id_f)->get();

        return response()->json([
            'status'=>200,
            'Type'=>$Type
        ]);
    }

    public function GetPrice($id_f){

        $Price =Produit::where('id', $id_f)->get();

        return response()->json([
            'status'=>200,
            'Price'=>$Price
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
    {   $dateActuelle = Carbon::now();

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
