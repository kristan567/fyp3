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
        Schema::create('recommends', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('Project_Name');
            $table->string('project_type');
            $table->integer('material_unit_cost');
            $table->integer('floor');
            $table->integer('Size');
            $table->string('Design_Preferences');
            $table->string('Functional_Requirements');
            $table->integer('labor_hourly_rate');
            $table->integer('equipment_hourly_cost');
            $table->integer('Room_number');
            $table->integer('number_of_bedrooms');
            $table->integer('bathroom');
            $table->string('Architectural_style');
            $table->date('start_date');
            $table->date('end_date');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommends');
    }
};
