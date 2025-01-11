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
        Schema::create("income_expenses", function(BluePrint $table){
            $table->id()->primary();
            $table->datetime("date");
            $table->string("transaction_type", length:10);
            $table->double("amount");
            $table->string("document")->nullable();
            $table->timestamps();
        });

        Schema::table("income_expenses", function(BluePrint $table){
            $table->foreignId('user_id')->nullable()->constrained(table:'users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income_expenses');
    }
};
