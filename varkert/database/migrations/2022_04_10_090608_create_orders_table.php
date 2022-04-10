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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sitting')->require()->unsigned();
            $table->integer('orderedFrom')->require()->unsigned();
            $table->foreign('sitting')
            ->references('id')
            ->on('sittings')
            ->onDelete('cascade')
            ->onUpdate('restrict');
            $table->foreign('orderedFrom')
            ->references('id')
            ->on('workers')
            ->onDelete('cascade')
            ->onUpdate('restrict');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
