<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articlepaniers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produit');
            $table->unsignedBigInteger('id_panier');
            $table->integer('quantite');
            $table->float('prixTotal');
            $table->timestamps();
            $table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');
            $table->foreign('id_panier')->references('id')->on('paniers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articlepaniers');
    }
};
