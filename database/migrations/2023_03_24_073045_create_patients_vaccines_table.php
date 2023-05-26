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
            $table->unsignedBigInteger('id_patient')->index();
            $table->unsignedBigInteger('id_user')->index();
            $table->string('id_vaccine', 50)->index();
            $table->foreign('id_patient')
                  ->references('id')
                  ->on('patients')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('id_user')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('cascade');
            $table->foreign('id_vaccine')
                  ->references('id')
                  ->on('vaccines')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
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
