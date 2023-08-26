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
        Schema::create('bloc_culture_projet', function (Blueprint $table) {
            $table->unsignedBigInteger('bloc_id') ;
            $table->unsignedBigInteger('culture_id');
            $table->unsignedBigInteger('projet_id');
            
            $table->foreign('bloc_id')->references('id')->on('blocs')->onDelete('cascade');
            $table->foreign('culture_id')->references('id')->on('cultures')->onDelete('cascade');
            $table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bloc_culture_projet');
    }
};
