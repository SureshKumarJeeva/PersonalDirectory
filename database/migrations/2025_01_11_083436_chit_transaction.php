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
        Schema::create("chit_transactions", function(BluePrint $table){
            $table->id();
            $table->foreignId("chit_id")->constrained('chits')->onDelete('cascade');
            $table->datetime('emi_month_year');
            $table->double("due_amount");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("chit_transactions");
    }
};
