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
        Schema::create("chits", function(BluePrint $table){
            $table->id();
            $table->foreignId('finance_id')->nullable()->constrained('finance');
            $table->double('amount');
            $table->datetime('start_date')->nullable();
            $table->integer('duration_months')->nullable();
            $table->boolean('alert_notification')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chits');
    }
};
