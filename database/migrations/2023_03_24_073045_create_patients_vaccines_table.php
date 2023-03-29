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
        Schema::create('patients_vaccines', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->date('next_date');
            $table->text('note')->nullable();
            $table->bigInteger('id_patient')
                  ->references('id')
                  ->on('patients');
            $table->bigInteger('id_user')
                  ->references('id')
                  ->on('users');
            $table->string('id_vaccine', 50)
                  ->references('id')
                  ->on('vaccines');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients_vaccines');
    }
};
