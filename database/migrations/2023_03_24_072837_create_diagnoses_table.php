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
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->text('note')->nullable();
            $table->bigInteger('id_patient')
                  ->references('id')
                  ->on('patients');
            $table->bigInteger('id_user')
                  ->references('id')
                  ->on('users');
            $table->string('id_disease', 50)
                  ->references('id')
                  ->on('diseases');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnoses');
    }
};
