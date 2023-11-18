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
        Schema::create('regular_horarios', function (Blueprint $table) {
            $table->id();
            $table->string('regular_name');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                        ->references('id')->on('users')
                        ->onDelete('set null');
            $table->unsignedBigInteger('pnf_id')->nullable();
            $table->foreign('pnf_id')
                        ->references('id')->on('pnfs')
                        ->onDelete('set null');
            $table->time('hora_entrada')->nullable();
            $table->time('hora_salida')->nullable();
            $table->integer('dia')->nullable();
            $table->integer('turno')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regular_horarios');
    }
};
