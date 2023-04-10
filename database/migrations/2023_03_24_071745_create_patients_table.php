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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('surname', 50);
            $table->text('img')->default('/images/default.png');
            $table->string('code', 100)->unique()->nullable();
            $table->string('cell', 20)->unique()->nullable();
            $table->string('role', 50)->nullable();
            $table->integer('home')->nullable();
            $table->integer('moransa')->nullable();
            $table->double('weight')->nullable();
            $table->double('height')->nullable();
            $table->double('bmi')->nullable();
            $table->date('birth_date');
            $table->char('sex', 1);
            $table->string('blood_type', 5)->nullable();
            $table->dateTime('last_modified')->default((new DateTime())->format("Y-m-d H:i:s"));
            $table->text('overview')->nullable();
            $table->integer('card_freq')->nullable();
            $table->integer('min_press')->nullable();
            $table->integer('max_press')->nullable();
            $table->unsignedBigInteger('id_village')->index();
            $table->unsignedBigInteger('id_user')->index();
            $table->foreign('id_village')
                  ->references('id')
                  ->on('villages');
            $table->foreign('id_user')
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
