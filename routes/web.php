<?php

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UtilisateurController;
use App\Models\Image;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* 
Vous Pouvez modifier ou ajouter les/des routes pour les users lambdas; la je les ai faites de facon standart. 
Les plus detaillees sont celles des administrateurs. Mais je crois que celles la sont ok, vu que c'est moi craft les controllers.
*/

Route::get('/', function () {
    $articles=Article::orderBy('created_at','desc')->limit(3)->get();
    $images=Image::orderBy('created_at','desc')->limit(4)->get();
    return view('welcome',compact('articles','images'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/a-propos', function () {
    return view('about');
});

Route::get('/galerie', function () {
    $images=Image::all();
    return view('galery',compact('images'));
});

Route::get('/blog', function () {
    $articles=Article::paginate(9);
    return view('blog',compact('articles'));
});

Route::post('/recherche', function (Request $request) {
    $articles=Article::where('titre','LIKE',"%".$request->titre."%")->paginate(9);
    return view('resultat',compact('articles'));
});

Route::get('/article/{id}', function ($id) {
    $article=Article::where('id_article',$id)->first();
    $articles=Article::orderBy('created_at','desc')->limit(3)->get();
    return view('article',compact('article','articles'));
});

Route::get('/produits', function () {
    return view('shop');
});

Route::post('/admin/message', [MessageController::class, 'add_message'])->name('Ajouter de msg');
    

Route::middleware(['auth:sanctum', 'verified'])-> group(function(){

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/admin/categorie', [CategorieController::class, 'get_categories'])->name('Toutes les categories');
    Route::get('/admin/categorie/get/{cat}', [CategorieController::class, 'get_category'])->name('Une categorie');
    Route::get('/admin/categorie/add_categorie', [CategorieController::class, 'add_category_view'])->name('Ajouter une categorie');
    Route::post('/admin/categorie/add_categorie', [CategorieController::class, 'add_category'])->name('Ajout de cat');
    Route::put('/admin/categorie/{cat}', [CategorieController::class, 'edit_category'])->name('Modifier une categorie');
    Route::delete('/admin/categorie/{cat}', [CategorieController::class, 'delete_category'])->name('Supprimer une categorie');

    Route::get('/admin/article', [ArticleController::class, 'get_articles'])->name('Tous les articles');
    Route::get('/admin/article/get/{art}', [ArticleController::class, 'get_article'])->name('Un article');
    Route::get('/admin/article/add_article/', [ArticleController::class, 'add_article_view'])->name('Ajouter un article');
    Route::post('/admin/article/add_article/', [ArticleController::class, 'add_article'])->name('Ajout de art');
    Route::put('/admin/article/{art}', [ArticleController::class, 'edit_article'])->name('Modifier un article');
    Route::delete('/admin/article/{art}', [ArticleController::class, 'delete_article'])->name('Supprimer un article');


    Route::get('/admin/image', [ImageController::class, 'img_view'])->name('Toutes les images');
    Route::post('/admin/image/add_image', [ImageController::class, 'add_img'])->name('Ajout img');
    Route::get('/admin/image/add_image', [ImageController::class, 'add_img_view'])->name('Vue Ajout img');
    Route::delete('/admin/image/{img}', [ImageController::class, 'delete_img'])->name('Supprimer une image');


    Route::get('/admin/vente', [VenteController::class, 'get_ventes'])->name('Toutes les ventes');
    Route::get('/admin/vente/get/{vente}', [VenteController::class, 'get_vente'])->name('Une vente');
    Route::get('/admin/vente/add_vente/', [VenteController::class, 'add_vente_view'])->name('Ajouter une vente');
    Route::post('/admin/vente', [VenteController::class, 'add_vente'])->name('Ajout de vente');
    Route::put('/admin/vente/{vente}', [VenteController::class, 'edit_vente'])->name('Modifier une vente');
    Route::delete('/admin/vente/{vente}', [VenteController::class, 'delete_vente'])->name('Supprimer une vente');

    Route::get('/admin/utilisateur', [UtilisateurController::class, 'get_utilisateurs'])->name('Tous les utilisateurs');
    Route::get('/admin/utilisateur/get/{user}', [UtilisateurController::class, 'get_utilisateur'])->name('Un utilisateur');
    Route::get('/admin/utilisateur/add_utilisateur/', [UtilisateurController::class, 'add_utilisateur_view'])->name('Ajouter un utilisateur');
    Route::post('/admin/utilisateur/add_utilisateur/', [UtilisateurController::class, 'add_utilisateur'])->name('Ajouter de user');
    Route::put('/admin/utilisateur/{user}', [UtilisateurController::class, 'edit_utilisateur'])->name('Modifier un utilisateur');
    Route::delete('/admin/utilisateur/{user}', [UtilisateurController::class, 'delete_utilisateur'])->name('Supprimer un utilisateur');

    Route::get('/admin/produit', [ProduitController::class, 'get_produits'])->name('Tous les produits');
    Route::get('/admin/produit/get/{prod}', [ProduitController::class, 'get_produit'])->name('Un produit');
    Route::get('/admin/produit/add_produit/', [ProduitController::class, 'add_produit_view'])->name('Ajouter un produit');
    Route::post('/admin/produit/add_produit/', [ProduitController::class, 'add_produit'])->name('Ajouter de prod');
    Route::put('/admin/produit/{prod}', [ProduitController::class, 'edit_produit'])->name('Modifier un produit');
    Route::delete('/admin/produit/{prod}', [ProduitController::class, 'delete_produit'])->name('Supprimer un produit');

    Route::get('/admin/reservation', [ReservationController::class, 'get_reservations'])->name('Toutes les reservations');
    Route::get('/admin/reservation/get/{reserv}', [ReservationController::class, 'get_reservation'])->name('Une reservation');
    Route::get('/admin/reservation/add_reservation/', [ReservationController::class, 'add_reservation_view'])->name('Ajouter une reservation');
    Route::post('/admin/reservation', [ReservationController::class, 'add_reservation'])->name('Ajouter de reserv');
    Route::put('/admin/reservation/{reserv}', [ReservationController::class, 'edit_reservation'])->name('Modifier une reservation');
    Route::delete('/admin/reservation/{reserv}', [ReservationController::class, 'delete_reservation'])->name('Supprimer une reservation');

    Route::get('/admin/message', [MessageController::class, 'get_messages'])->name('Tous les messages');
    Route::get('/admin/message/get/{msg}', [MessageController::class, 'get_message'])->name('Un message');
    Route::get('/admin/message/add_message/', [MessageController::class, 'add_message_view'])->name('Ajouter un message');
    Route::put('/admin/message/{msg}', [MessageController::class, 'edit_message'])->name('Modifier un message');
    Route::delete('/admin/message/{msg}', [MessageController::class, 'delete_message'])->name('Supprimer un message');

});

Route::get('/test', function () {
    return view('admin.monprofil');
});

Route::get('/test_page', function () {
    return view('test_page');
});
