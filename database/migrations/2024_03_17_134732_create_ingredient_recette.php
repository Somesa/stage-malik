<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientRecette extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_recette', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

			$table->unsignedBigInteger('ingredient_id');
			$table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade');

			$table->unsignedBigInteger('recette_id');
			$table->foreign('recette_id')->references('id')->on('recettes')->onDelete('cascade');

			$table->string('quantite')->nullable();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_recette');
    }
}
