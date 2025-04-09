<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendeursTable extends Migration
{
    /**
     * Exécute la migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendeurs', function (Blueprint $table) {
            $table->id();
            $table->string('owner');
            $table->string('business');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('street');
            $table->string('city');
            $table->string('postal_code');
            $table->string('password');
            $table->string('activity');
            $table->json('days_open');
            $table->json('pickup_hours');
            $table->string('photo')->nullable(); // Pour stocker l'image si présente
            $table->timestamps();
        });
    }

    /**
     * Annule la migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendeurs');
    }
}
