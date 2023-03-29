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
        Schema::create('diagnoses_medicines', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('quantity');
            $table->string('when', 10);
            $table->bigInteger('id_diagnose')
                  ->references('id')
                  ->on('diagnoses');
            $table->bigInteger('id_medicine')
                  ->references('id')
                  ->on('medicines');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnoses_medicines');
    }
};
