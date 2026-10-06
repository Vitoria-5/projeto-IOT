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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sensor_id')->unsigned()->nullable(false);
            $table->string('valor')->nullable(false);
            $table->string('unidade')->nullable(false);
            $table->dateTime('data_hora')->nullable(false);
            $table->foreign('sensor_id')->references('id')->on('sensors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
