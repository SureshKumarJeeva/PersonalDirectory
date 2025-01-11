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
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name', length: 80)->nullable();
            $table->string('gender', length: 10);
            $table->dateTime('dob');
            $table->string('login_id', length: 150);
            $table->string('user_type', length: 150);
            $table->foreignId('relationship_id')
                  ->nullable()
                  ->constrained(table: 'relationship');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
