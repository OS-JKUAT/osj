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
        Schema::create('missing_people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('nickname')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender', 20)->nullable();
            $table->string('hashtag')->nullable();
            $table->string('hair')->nullable();
            $table->string('eyes')->nullable();
            $table->string('language')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('poster')->nullable();
            $table->string('last_seen_location')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->date('date_last_seen')->nullable();
            $table->date('dob')->nullable();
            $table->text('description')->nullable();
            $table->text('suspicion')->nullable();
            $table->string('reporter_name')->nullable();
            $table->string('reporter_contact')->nullable();
            $table->enum('status', ['missing', 'found'])->default('missing');
            $table->text('status_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missing_people');
    }
};
