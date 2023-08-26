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
        Schema::create('cultures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('temp_min',8,2);
            $table->float('temp_max',8,2);
            $table->float('TCO2_min',8,2);
            $table->float('TCO2_max',8,2);
            $table->float('VsH2O_min',8,2);
            $table->float('VsH2O_max',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cultures');
    }
};
