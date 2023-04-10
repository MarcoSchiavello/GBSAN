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
            $table->unsignedBigInteger('id_patient')->index();
            $table->unsignedBigInteger('id_user')->index();
            $table->string('id_illness', 50)->index();
            $table->foreign('id_patient')
                  ->references('id')
                  ->on('patients')
                  ->onDelete('cascade');
            $table->foreign('id_user')
                  ->references('id')
                  ->on('users');
            $table->foreign('id_illness')
                  ->references('id')
                  ->on('illnesses')
                  ->onDelete('cascade');
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
