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
        Schema::create('flocks_caretaker_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flocks_caretaker_id')->constrained('flocks_caretaker')->cascadeOnDelete();
            $table->foreignId('animal_type_id')->constrained('animal_types')->onDelete('cascade'); // نوع دام
            $table->unsignedInteger('count'); //تعداد تحویل شده
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flocks_caretaker_items');
    }
};
