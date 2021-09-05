<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncheresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encheres', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->bigInteger('id_product')->unsigned();
            $table->foreign('id_product')->references('id')->on('produits');
            $table->decimal('new_price');
            $table->text('name_user');
            $table->text('time_click');
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
        Schema::dropIfExists('encheres');
    }
}
