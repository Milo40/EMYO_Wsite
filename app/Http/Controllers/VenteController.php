<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Utilisateur;
use App\Models\Vente;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    public function add_vente_view(){
        return view('admin/ventes');
    }
    public function get_ventes(){
        $ventes = Vente::all();
        $client_id = Vente::select('utilisateur_id')->pluck('utilisateur_id');
        $produit_id = Vente::select('produit_id')->pluck('produit_id');
        $vente_client = [];
        $vente_produit = [];
        for($x = 0; $x <= count($client_id) - 1; $x++){
            $vente_client[$x] = Utilisateur::where('id_utilisateur', $client_id[$x])->value('nom');
        }
        for($x = 0; $x <= count($produit_id) - 1; $x++){
            $vente_produit[$x] = Produit::where('id_produit', $produit_id[$x])->value('nom');
        }
/*         dd($vente_client, $vente_produit); */

        return view('admin/ventes', compact('ventes', 'vente_client', 'vente_produit'));
    }
    public function get_vente(){
        return view('admin/ventes');
    }
    public function add_vente(){
        return view('admin/ventes');
    }
    public function delete_vente(Request $req){
        $vente = $req->request->get('vente');
        //dd($msg);
        if(Vente::where('id_vente', $vente)->delete()){
        return back()->with('success', 'Vente Supprimee !');
        }else{
            return back()->with('error','Echec Suppression.');
        }
    }
    public function edit_vente(){
        return view('admin/ventes');
    }
}
