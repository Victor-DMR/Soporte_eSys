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
        Schema::create('soportes', function (Blueprint $table) {
            $table->id();
            $table->integer('nitcli');
            $table->string('cliente', 50);
            $table->string('descrip_service', 200);
            $table->integer('anydesk');
            $table->integer('telefono');
            $table->string('observacion', 200);
            $table->string('estado_service', 2);
            $table->string('tecnico', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soportes');
    }
};
