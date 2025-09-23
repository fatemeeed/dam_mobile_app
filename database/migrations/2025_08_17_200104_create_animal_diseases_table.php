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
        Schema::create('animal_diseases', function (Blueprint $table) {
            $table->id();
            $table->string('tag')->nullable();
            $table->foreignId('disease_id')->constrained('diseases')->cascadeOnDelete();
            $table->date('diagnosis_date');
            $table->foreignId('medicine_id')->constrained()->onDelete('cascade'); // دارو
            $table->text('description')->nullable();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_diseases');
    }
};
