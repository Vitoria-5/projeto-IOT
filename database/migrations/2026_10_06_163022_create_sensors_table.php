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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ambiente_id')->unsigned()->nullable(false);
            $table->string('codigo')->unique();
            $table->string('tipo')->nullable(false);
            $table->text('descricao');
            $table->boolean('status')->default(true);
            $table->foreign('ambiente_id')->references('id')->on('ambientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensors');
    }
};
