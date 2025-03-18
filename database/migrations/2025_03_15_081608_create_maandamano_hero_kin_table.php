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
        Schema::create('maandamano_hero_kin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maandamano_hero_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('relationship'); // e.g., spouse, child, sibling
            $table->string('contact')->nullable(); // Phone/email (optional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maandamano_hero_kin');
    }
};
