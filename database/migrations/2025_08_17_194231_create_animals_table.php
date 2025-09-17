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
            $table->foreignId('financial_year_id')->constrained('financial_years')->cascadeOnDelete();
            $table->foreignId('herd_id')->constrained()->onDelete('cascade'); // گله مربوطه
            $table->string('animal_type'); // نوع دام (گوسفند، بز، ...)
            $table->string('start_tag'); // شماره شروع (مثلا 1000)
            $table->string('end_tag');   // شماره پایان (مثلا 1036)
            $table->unsignedInteger('count'); // تعداد کل (مثلا 37)
            $table->date('tag_date')->nullable(); // تاریخ پلاک‌گذاری
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
