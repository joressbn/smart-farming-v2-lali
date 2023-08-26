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
        Schema::create('projet_site_geo', function (Blueprint $table) {
            $table->unsignedBigInteger('projet_id') ;
            $table->unsignedBigInteger('site_geo_id');

            $table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade');
            $table->foreign('site_geo_id')->references('id')->on('site_geos')->onDelete('cascade');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projet_sitegeo');
    }
};
