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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->constrained('accounts')->cascadeOnDelete();
            $table->foreignId('financial_year_id')->constrained('financial_years')->cascadeOnDelete();
            $table->enum('type', ['payment', 'receipt']);
            $table->decimal('amount', 15, 2);
            $table->string('reference_number')->nullable();
            $table->date('transaction_date');
            $table->text('description');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
