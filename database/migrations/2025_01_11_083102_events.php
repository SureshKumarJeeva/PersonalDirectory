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
        Schema::create("events", function(BluePrint $table){
            $table->id()->primary();
            $table->foreignId("event_category_id")->nullable()->constrained('event_category');
            $table->string("event_desc")->nullable();
            $table->foreignId("user_id")->nullable()->constrained('users');
            $table->datetime("event_date");
            $table->boolean("alert_notification")->nullable();
            $table->string("document")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
