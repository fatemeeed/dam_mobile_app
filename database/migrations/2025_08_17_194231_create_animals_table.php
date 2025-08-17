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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('tag_number')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->date('birth_date');
            $table->string('breed');
            $table->foreignId('herd_id')->constrained('herds')->cascadeOnDelete();
            $table->foreignId('caretaker_id')->nullable()->constrained('caretakers')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
