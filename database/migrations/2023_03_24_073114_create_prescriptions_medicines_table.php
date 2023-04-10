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
        Schema::create('prescriptions_medicines', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('quantity');
            $table->string('when', 10);
            $table->unsignedBigInteger('id_prescription')->index();
            $table->string('id_medicine', 50)->index();
            $table->foreign('id_prescription')
                  ->references('id')
                  ->on('prescriptions')
                  ->onDelete('cascade');
            $table->foreign('id_medicine')
                  ->references('id')
                  ->on('medicines')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions_medicines');
    }
};
