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
        Schema::create('newusers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company_name')->nullable(); // Nullable since it's optional
            $table->integer('number_of_users')->nullable(); // Nullable since it's optional
            $table->string('email')->unique();
            $table->string('password'); // You may want to hash the password before storing it
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newusers');
    }
};
