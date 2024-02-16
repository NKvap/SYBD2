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
        Schema::create('session', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_film');
            $table->foreign('id_film')->references('id')->on('film');
            $table->unsignedBigInteger('id_hall');
            $table->foreign('id_hall')->references('id')->on('hall');
            $table->date('date');
            $table->integer('price');
            $table->time('time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session');
    }
};
