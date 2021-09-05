<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->string('category');
            $table->date('date');
            $table->string('image');
            $table->time('time');
            $table->string('condition');
            $table->unsignedBigInteger('id_user');
            //image et checkbox (new or used ) et category
            $table->integer('statut')->default("0");
            $table->integer('startingPrice');
            $table->string('new_price')->default("");
            $table->string('winner')->default("");

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
        Schema::dropIfExists('produits');
    }
}
