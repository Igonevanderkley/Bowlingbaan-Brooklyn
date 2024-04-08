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
        Schema::create('reservering', function (Blueprint $table) {
            $table->id();
            $table->integer('persoonId');
            $table->integer('openingstijdId');
            $table->integer('tariefId');
            $table->integer('baanId');
            $table->integer('pakketOptieId')->nullable();
            $table->integer('reserveringStatusId');
            $table->integer('reserveringsNummer');
            $table->date('datum');
            $table->integer('aantalUren');
            $table->time('beginTijd');
            $table->time('eindTijd');
            $table->integer('aantalVolwassen');
            $table->integer('aantalKinderen')->nullable();
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
        Schema::dropIfExists('reservering');
    }
};
