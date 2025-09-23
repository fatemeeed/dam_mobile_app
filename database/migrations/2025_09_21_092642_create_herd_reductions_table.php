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
        Schema::create('herd_reductions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('herd_id')->constrained()->onDelete('cascade'); // نام گله
            $table->foreignId('animal_type_id')->constrained('animal_types')->onDelete('cascade'); // نوع دام
            $table->date('reduction_date'); // تاریخ کاهش
            $table->enum('reduction_type', ['death', 'slaughter', 'halal_bor', 'missing']); // نوع کاهش
            $table->string('reason')->nullable(); // علت
            $table->unsignedInteger('count'); // تعداد کاهش
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
