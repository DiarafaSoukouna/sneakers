<?php

namespace App\Http\Controllers;
use App\Models\SousCategorie;
use App\Models\Produit;
use App\Models\contenirs;
use App\Models\Commande;
use App\Models\Categorie;
use App\Http\Controllers\Utilities\FileUtilsController;
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
        $commande = DB::select("
        SELECT
            `date_commande`,
            user_id,
            SUM(price_commande) AS montant_total,
            SUM(quantity) AS quantite_total
        FROM
            `commandes`
        INNER JOIN
            `contenirs` ON commandes.id = contenirs.commande
        WHERE
            user_id = $user_id
        GROUP BY
            `date_commande`, user_id
    ");
        $SousCategorie = SousCategorie::all();
        $Type =Produit::all();
        $user= User::all();
        $categorie= Categorie::all();
        return view('commande', compact('SousCategorie', 'commande', 'user','Type', 'categorie'));
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

        $Price =SousCategorie::where('categorie', $id_f)->get();

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
    {   
        $imageName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('admintemplate/assets/img', $imageName, 'public');
        Produit::create([
            'libelle' => $request->libelle,
            'price' => $request->price,
            'quantite_disponible' => $request->quantite_disponible,
            'type' => $request->type,
            'image' => $imageName ,
        ]);
    //    $commande = Commande::create([
    //         'date_commande' => $dateActuelle,
    //         'user_id' => Auth::user()->id,
    //     ]);
    //     for ($j = 0; $j < count($request->produit); $j++) {
           
    //     }
        
        
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
        $produit=Produit::find($id);
        return response()->json([
        'satuts'=>2000,
        'produit'=>$produit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produit = Produit::find($id);
        $produit->libelle = $request->libelle;
        $produit->price = $request->price;
        $produit->quantite_disponible = $request->quantite_disponible;
        $produit->type = $request->type;
        if($request->image != null){
        $imageName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('admintemplate/assets/img', $imageName, 'public');
        $produit->image = $imageName;
        }
        $produit->update();

        return redirect()->back();
    }

    public function updatequantite(Request $request)
    {

            if($request->ajax()){
                Produit::where('id', $request->pk)->update(['quantite_disponible' => $request->value]);
                return response()->json(['success' => true]);
            }

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user= Produit::find($id);
        $user->delete();
        return  redirect()->back()->with('success', 'Produit supprimer avec success');
    }
}
