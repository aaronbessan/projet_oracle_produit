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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')->nullable(); ///Description Optionnnelle
            $table->decimal('prix', 10, 2);
            $table->integer('quantite_stock'); //Quantite en stock
            $table->foreignId('categorie_id')->constrained('categories')->onDelete('cascade'); // Clé étrangère vers la table catégories
            $table->foreignId('fournisseur_id')->constrained('fournisseurs')->onDelete('cascade'); // Clé étrangère vers la table fournisseurs
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
