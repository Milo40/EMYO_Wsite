<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAllTablesWithKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categorie', function (Blueprint $table) {
            
        });

        Schema::table('article', function (Blueprint $table) {
            $table->foreign('categorie_id')->references('id_categorie')->on('categorie');
        });

        Schema::table('vente', function (Blueprint $table) {
            $table->foreign('produit_id')->references('id_produit')->on('produit');
        });

        Schema::table('reservation', function (Blueprint $table) {
            $table->foreign('produit_id')->references('id_produit')->on('produit');
        });

        Schema::table('produit', function (Blueprint $table) {
        });

        Schema::table('utilisateur', function (Blueprint $table) {

        });

        Schema::table('message', function (Blueprint $table) {

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
    }
}
