<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dni');
            $table->string('nombre');
            $table->string ('apellido1');
            $table->string('apellido2')->nullable();
            $table->string('email');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
