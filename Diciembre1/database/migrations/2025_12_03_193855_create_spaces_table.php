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
        Schema::create('spaces', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('edificio');
            $table->integer('piso');
            $table->integer('codEntrada');

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('spaces');
    }
};
