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
        Schema::create('financial_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->constrained('accounts')->cascadeOnDelete();
            $table->foreignId('financial_year_id')->constrained('financial_years')->cascadeOnDelete();
            $table->enum('financial_type', ['income', 'expense']);
            $table->foreignId('transaction_category_id')->constrained('transaction_categories')->cascadeOnDelete();
            $table->string('unit_price');
            $table->string('number');
            $table->decimal('amount', 15, 2);
            $table->string('reference_number')->nullable();
            $table->text('description');
            $table->date('transaction_date');
            $table->tinyInteger('payment_status')->default('0')->comment(['0'=>'notpayment' , '1'=>'payment']);
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financial_records');
    }
};
