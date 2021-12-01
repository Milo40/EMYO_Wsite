<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vente', function (Blueprint $table) {
            $table->unsignedBigInteger('id_vente')->autoIncrement();
            $table->date('date')->defaultValue('01/01/2022')->nullable();
            $table->unsignedBigInteger('produit_id')->nullable();
            $table->unsignedBigInteger('utilisateur_id')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('vente');
    }
}
