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
        $prod_image = $req->request->get('image');
        $allow_formats = ['png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG', 'gif', 'GIF'];
        $format_check = explode(".", $prod_image);
        if(in_array($format_check[1], $allow_formats)){
        try {
            DB::table('produit')->insert([
                'nom' => $prod_name,
                'prix' => $prod_price,
                'description' => $prod_desc,
                'image' => $prod_image,
                'is_reserve' => $prod_state
            ]);
            return back()->with('success','Produit OK');
        } catch (Exception $x) {
            return back()->with('error','Echec de l\'ajout');
        }
    }else{
        return back()->with('error','Le format de l\'image est pas valide.');
    }

    }
    
    public function delete_produit(){

    }
    public function edit_produit(){
        return view('admin/produits/edit');

    }
}
