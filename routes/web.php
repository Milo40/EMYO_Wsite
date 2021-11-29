<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('index');
});


Route::middleware(['auth:sanctum', 'verified'])-> group(function(){

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('admin/categorie', [CategorieController::class, 'get_categories'])->name('Toutes les categories');
    Route::get('admin/categorie/{cat}', [CategorieController::class, 'get_category'])->name('Une categorie');
    Route::post('admin/categorie', [CategorieController::class, 'add_category'])->name('Ajouter une categorie');
    Route::put('admin/categorie/{cat}', [CategorieController::class, 'edit_category'])->name('Modifier une categorie');
    Route::delete('admin/categorie/{cat}', [CategorieController::class, 'delete_category'])->name('Supprimer une categorie');

    Route::get('admin/article', [ArticleController::class, 'get_articles'])->name('Tous les articles');
    Route::get('admin/article/{art}', [ArticleController::class, 'get_article'])->name('Un article');
    Route::post('admin/article', [ArticleController::class, 'add_article'])->name('Ajouter un article');
    Route::put('admin/article/{art}', [ArticleController::class, 'edit_article'])->name('Modifier un article');
    Route::delete('admin/article/{art}', [ArticleController::class, 'delete_article'])->name('Supprimer un article');

    Route::get('admin/vente', [VenteController::class, 'get_ventes'])->name('Toutes les ventes');
    Route::get('admin/vente/{vente}', [VenteController::class, 'get_vente'])->name('Une vente');
    Route::post('admin/vente', [VenteController::class, 'add_vente'])->name('Ajouter une vente');
    Route::put('admin/vente/{vente}', [VenteController::class, 'edit_vente'])->name('Modifier une vente');
    Route::delete('admin/vente/{vente}', [VenteController::class, 'delete_vente'])->name('Supprimer une vente');

    Route::get('admin/utilisateur', [UtilisateurController::class, 'get_utilisateurs'])->name('Tous les utilisateurs');
    Route::get('admin/utilisateur/{user}', [UtilisateurController::class, 'get_utilisateur'])->name('Un utilisateur');
    Route::post('admin/utilisateur', [UtilisateurController::class, 'add_utilisateur'])->name('Ajouter un utilisateur');
    Route::put('admin/utilisateur/{user}', [UtilisateurController::class, 'edit_utilisateur'])->name('Modifier un utilisateur');
    Route::delete('admin/utilisateur/{user}', [UtilisateurController::class, 'delete_utilisateur'])->name('Supprimer un utilisateur');

    Route::get('admin/produit', [ProduitController::class, 'get_produits'])->name('Tous les produits');
    Route::get('admin/produit/{prod}', [ProduitController::class, 'get_produit'])->name('Un produit');
    Route::post('admin/produit', [ProduitController::class, 'add_produit'])->name('Ajouter un produit');
    Route::put('admin/produit/{prod}', [ProduitController::class, 'edit_produit'])->name('Modifier un produit');
    Route::delete('admin/produit/{prod}', [ProduitController::class, 'delete_produit'])->name('Supprimer un produit');

    Route::get('admin/reservation', [ReservationController::class, 'get_reservations'])->name('Toutes les reservations');
    Route::get('admin/reservation/{reserv}', [ReservationController::class, 'get_reservation'])->name('Une reservation');
    Route::post('admin/reservation', [ReservationController::class, 'add_reservation'])->name('Ajouter une reservation');
    Route::put('admin/reservation/{reserv}', [ReservationController::class, 'edit_reservation'])->name('Modifier une reservation');
    Route::delete('admin/reservation/{reserv}', [ReservationController::class, 'delete_reservation'])->name('Supprimer une reservation');

    Route::get('admin/message', [MessageController::class, 'get_messages'])->name('Tous les messages');
    Route::get('admin/message/{msg}', [MessageController::class, 'get_message'])->name('Un message');
    Route::post('admin/message', [MessageController::class, 'add_message'])->name('Ajouter un message');
    Route::put('admin/message/{msg}', [MessageController::class, 'edit_message'])->name('Modifier un message');
    Route::delete('admin/message/{msg}', [MessageController::class, 'delete_message'])->name('Supprimer un message');

});

Route::get('/test', function () {
    return view('admin.monprofil');
});
