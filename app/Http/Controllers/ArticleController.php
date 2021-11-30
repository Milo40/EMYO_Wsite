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
        $art_banniere = $req->request->get('banniere');
        $allow_formats = ['png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG', 'gif', 'GIF'];
        $format_check = explode(".", $art_banniere);
        if(in_array($format_check[1], $allow_formats)){
        try {
            DB::table('article')->insert([
                'titre' => $art_title,
                'contenu' => $art_desc,
                'banniere' => $art_banniere
            ]);
            return back()->with('success','Article OK');
        } catch (Exception $x) {
            return back()->with('error','Echec de l\'ajout');
        }
    }else{
        return back()->with('error','Le format de l\'image est pas valide.');
    }

    }

    public function delete_article()
    {
    }
    public function edit_article()
    {
        return view('admin/articles/edit');
    }
}
