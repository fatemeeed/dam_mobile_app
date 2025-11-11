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
        Schema::create('flocks_change', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flock_id')->constrained('flocks')->onDelete('cascade'); // نام گله
            $table->foreignId('caretaker_id')->constrained('caretakers')->cascadeOnDelete();
            $table->date('change_date');
            $table->enum('change_type', ['initial', 'increase', 'decrease']);
            $table->foreignId('flock_change_reasons_id')->nullable()->constrained('flocks_change_reasons')->onDelete('cascade'); // نوع دام
            $table->text('reason')->nullable(); // علت
            $table->foreignId('animal_type_id')->constrained('animal_types')->onDelete('cascade'); // نوع دام
            $table->unsignedInteger('count'); 
            $table->text('description')->nullable(); // توضیح بیشتر
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('herd_reductions');
    }
};
