<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function add_category_view(){
        return view('admin/categories/ajout');
    }
    public function get_categories(){
        $cats = Categorie::all();
        return view('admin/categories/liste', compact('cats'));
    }
    public function get_category(){

    }

    public function add_category(Request $req){
        $cat_title = $req->request->get('titre');
        $cat_desc = $req->request->get('description');
        try {
            DB::table('categorie')->insert([
                'titre' => $cat_title,
                'description' => $cat_desc
            ]);
            return back()->with('success','Categorie OK');
        } catch (Exception $x) {
            return back()->with('error','Echec de l\'ajout');
        }
    }

    public function delete_category(){

    }
    public function edit_category(){
        return view('admin/categories/edit');
    }
}
