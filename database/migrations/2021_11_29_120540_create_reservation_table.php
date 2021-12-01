<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->unsignedBigInteger('id_reservation')->autoIncrement();
            $table->date('date_source')->nullable()->default('2022-01-01');
            $table->date('date_destination')->nullable()->default('2022-01-01');
            $table->string('mail_client', 255)->nullable();
            $table->integer('numero_client')->nullable();
            $table->string('nom_client', 255)->nullable();
            $table->unsignedBigInteger('produit_id')->nullable();
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
        Schema::dropIfExists('reservation');
    }
}
