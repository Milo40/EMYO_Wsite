<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

use function Psy\debug;

class ArticleController extends Controller
{
    public function add_article_view()
    {
        return view('admin/articles/ajout');
    }
    public function get_articles()
    {
        $arts = Article::all();
        return view('admin/articles/liste', compact('arts'));
    }
    public function get_article()
    {
    }

    public function add_article(Request $req)
    {
        $art_title = $req->request->get('titre');
        $art_desc = $req->request->get('contenu');
        $art_banniere = $req->file('banniere')->getClientOriginalName();
        $allow_formats = ['png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG', 'gif', 'GIF'];
        $format_check = explode(".", $art_banniere);
        if(in_array($req->file('banniere')->extension(), $allow_formats)){
        try {
            DB::table('article')->insert([
                'titre' => $art_title,
                'contenu' => $art_desc,
                'banniere' => $art_banniere,
                'created_at' => now()
                
            ]);
            if($req->file('banniere')->storeAs('public/Articles_Banners', $req->file('banniere')->getClientOriginalName())){
            return back()->with('success','Article OK');
            }
        } catch (Exception $x) {
            return back()->with('error','Echec de l\'ajout');
        }
    }else{
        return back()->with('error','Le format de l\'image est pas valide.');
    }

    }

    public function delete_article(Request $req)
    {
        $art = $req->request->get('art');
        //dd($msg);
        if(Article::where('id_article', $art)->delete()){ 
        return back()->with('success', 'Article Supprime !');
        }else{
            return back()->with('error','Echec Suppression');
        }
    }
    
    public function edit_article_view(Request $req)
    {
        $art = $req->request->get('art');
        $articles = Article::where('id_article', $art)->get();
        foreach($articles as $arts){

        }

         /* dd($arts->id_article); */
        return view('admin/articles/edit', compact('arts'));
    }

    public function edit_article(Request $req)
    {
        $art = $req->request->get('art');
        $art_title = $req->request->get('titre');
        $art_desc = $req->request->get('contenu');
        $art_banniere = $req->file('banniere')->getClientOriginalName();
        $allow_formats = ['png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG', 'gif', 'GIF'];
        if(in_array($req->file('banniere')->extension(), $allow_formats)){
            try {
                DB::table('article')->where('id_article', $art)->update([
                    'titre' => $art_title,
                    'contenu' => $art_desc,
                    'banniere' => $art_banniere
                ]);
                if($req->file('banniere')->storeAs('public/Articles_Banners', $req->file('banniere')->getClientOriginalName())){
                return back()->with('success','Article MAJ');
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
}
