<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->require();
            $table->double('price')->require();
            $table->string('size');
            $table->integer('category')->require()->unsigned();
            $table->foreign('category')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade')
            ->onUpdate('restrict');
            //table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
