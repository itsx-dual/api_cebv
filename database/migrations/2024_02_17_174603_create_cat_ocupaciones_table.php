<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cat_ocupaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_ocupacion_id')->constrained('cat_tipos_ocupacion');
            $table->string('nombre');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cat_ocupaciones');
    }
};
