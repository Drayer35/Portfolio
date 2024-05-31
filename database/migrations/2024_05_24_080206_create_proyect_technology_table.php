<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\SerializableClosure\UnsignedSerializableClosure;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proyect_technology', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proyect_id');
            $table->unsignedBigInteger('technology_id');
            $table->timestamps();


            $table->foreign('proyect_id')->references('id')->on('proyects')->onDelete('cascade');
            $table->foreign('technology_id')->references('id')->on('technologies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyect_technology');
    }
};
