<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    public function add_vente_view(){
        return view('admin/ventes');
    }
    public function get_ventes(){
        $ventes = Vente::all();
        $vente_client = "";
        $vente_produit = "";

        return view('admin/ventes', compact('ventes', 'vente_client', 'vente_produit'));
    }
    public function get_vente(){
        return view('admin/ventes');
    }
    public function add_vente(){
        return view('admin/ventes');
    }
    public function delete_vente(){
        return view('admin/ventes');
    }
    public function edit_vente(){
        return view('admin/ventes');
    }
}
