<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    public function add_produit_view(){
        return view('admin/produits/ajout');
    }
    public function get_produits(){
        $prods = Produit::all();
        return view('admin/produits/liste', compact('prods'));
    }
    public function get_produit(){

    }

    public function add_produit(Request $req){
        $prod_name = $req->request->get('nom');
        $prod_price = $req->request->get('prix');
        $prod_desc = $req->request->get('description');
        $prod_state = $req->request->get('reserve');
/*         if ($prod_state == 'Non') {
            $prod_state = false;
        } elseif($prod_state == 'Oui') {
            $prod_state = true;
        } */
        /* dd($req->file('image')); */
        $prod_image = $req->file('image')->getClientOriginalName();
        $allow_formats = ['png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG', 'gif', 'GIF'];
        $format_check = explode(".", $prod_image);
        if(in_array($req->file('image')->extension(), $allow_formats)){
        try {
            DB::table('produit')->insert([
                'nom' => $prod_name,
                'prix' => $prod_price,
                'description' => $prod_desc,
                'image' => $prod_image,
                'is_reserve' => $prod_state
            ]);
            if($req->file('image')->storeAs('public/Products_Images', $req->file('image')->getClientOriginalName())){
                return back()->with('success','Produit OK');
                }
        } catch (Exception $x) {
            return back()->with('error','Echec de l\'ajout');
        }
    }else{
        return back()->with('error','Le format de l\'image est pas valide.');
    }

    }
    
    public function delete_produit(Request $req){

        $prod = $req->request->get('prod');

        if(Produit::where('id_produit', $prod)->delete()){
        return back()->with('success', 'Produit Supprime !');
        }else{
            return back()->with('error','Echec Suppression');
        }
    }

    public function edit_produit(Request $req){
    
        $prod = $req->request->get('prod');
        $prod_name = $req->request->get('nom');
        $prod_price = $req->request->get('prix');
        $prod_desc = $req->request->get('description');
        $prod_state = $req->request->get('reserve');
        $prod_image = $req->file('image')->getClientOriginalName();
        $allow_formats = ['png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG', 'gif', 'GIF'];
        if(in_array($req->file('image')->extension(), $allow_formats)){
            try {
                DB::table('produit')->where('id_produit', $prod)->update([
                    'nom' => $prod_name,
                    'prix' => $prod_price,
                    'description' => $prod_desc,
                    'image' => $prod_image,
                    'is_reserve' => $prod_state
                ]);
                if($req->file('image')->storeAs('public/Products_Images', $req->file('image')->getClientOriginalName())){
                return back()->with('success','Produit MAJ');
                }else{
                    return back()->with('error','Echec de la MAJ');
                }
            } catch (Exception $x) {
                return back()->with('error','Echec de la MAJ');
            }
        }else{
            return back()->with('error','Le format de l\'image est pas valide.');
        }

    }

    public function edit_produit_view(Request $req){

        $prod = $req->request->get('prod');
        $produits = Produit::where('id_produit', $prod)->get();
        foreach($produits as $prods){

        }

         /* dd($arts->id_article); */
        return view('admin/produits/edit', compact('prods'));

    }
}
