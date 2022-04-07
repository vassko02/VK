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
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('guestName')->require();
            $table->dateTime('arrival')->require();
            $table->integer('guestNumber')->require();
            $table->string('message');
            $table->integer('talkedTo')->require()->unsigned();
            $table->integer('table')->require()->unsigned();
            $table->foreign('talkedTo')
            ->references('id')
            ->on('workers')
            ->onDelete('cascade')
            ->onUpdate('restrict');
            $table->foreign('table')
            ->references('id')
            ->on('tables')
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
        Schema::dropIfExists('reservations');
    }
};
