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
        Schema::create('patients_illnesses', function (Blueprint $table) {
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
            $table->string('id_illness', 50)
                  ->references('id')
                  ->on('illnesses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients_illnesses');
    }
};
