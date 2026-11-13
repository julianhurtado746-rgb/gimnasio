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
    Schema::create('miembros', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('cedula')->unique();
        $table->string('telefono')->nullable();
        $table->string('email')->nullable();
        $table->date('fecha_nacimiento')->nullable();
        $table->string('estado')->default('activo');
        $table->foreignId('plan_id')->constrained('planes')->onDelete('cascade');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mienbros');
    }
};
