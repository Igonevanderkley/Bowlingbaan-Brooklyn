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
        Schema::create('persoon', function (Blueprint $table) {
            $table->id();
            $table->integer('typePersoonId');
            $table->string('voorNaam');
            $table->string('tussenVoegsel')->nullable();
            $table->string('achterNaam');
            $table->string('roepNaam');
            $table->boolean('isVolwassen');
            $table->boolean('isActief');
            $table->string('opmerkingen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persoon');
    }
};
