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
        Schema::create('flocks_caretaker', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flock_id')->constrained('flocks')->cascadeOnDelete();
            $table->foreignId('caretaker_id')->constrained('caretakers')->cascadeOnDelete();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->integer('animal_count_at_start')->nullable();
            $table->integer('animal_currect_count')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('herd_caretaker_records');
    }
};
