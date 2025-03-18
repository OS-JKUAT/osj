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
        Schema::create('maandamano_heroes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('alias')->nullable();
            $table->date('dob')->nullable();
            $table->date('dod')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('place_of_death')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('county')->nullable();
            $table->string('highschool')->nullable();
            $table->string('uni')->nullable();
            $table->string('occupation')->nullable();
            $table->string('cause')->nullable();
            $table->text('contributions')->nullable();
            $table->string('affiliations')->nullable();
            $table->string('awards')->nullable();
            $table->string('case_number')->nullable();
            $table->string('religion')->nullable();
            $table->string('residence')->nullable();
            $table->text('quotes')->nullable();
            $table->text('legacy')->nullable();
            $table->text('death')->nullable();
            $table->string('memorial_location')->nullable();
            $table->string('image')->nullable();
            $table->json('documents')->nullable();
            $table->text('eulogy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('maandamano_heroes');
    }
};
