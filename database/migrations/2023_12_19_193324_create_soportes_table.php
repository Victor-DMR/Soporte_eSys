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
            $table->string('nitcli', 20)->nullable();
            $table->string('cliente', 50)->nullable();
            $table->string('descrip_service', 200)->nullable();
            $table->string('anydesk', 20)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('observacion', 200)->nullable();
            $table->string('estado_service', 2)->nullable();
            $table->string('tecnico', 15)->nullable();
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
