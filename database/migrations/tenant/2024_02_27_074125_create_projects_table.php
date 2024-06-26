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
        Schema::create('Projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->integer('status');
            $table->string('start_date');
            $table->string('end_date');
            $table->boolean('completed')->default(false);
            $table->timestamp('completed_at')->nullable();
            // $table->string('location');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Projects');
    }
};
