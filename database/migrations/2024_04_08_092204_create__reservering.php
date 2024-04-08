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
        Schema::create('_reservering', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('PersoonId');
            $table->unsignedBigInteger('OpeningstijdId');
            $table->unsignedBigInteger('TariefId');
            $table->unsignedBigInteger('BaanId');
            $table->unsignedBigInteger('PakketOptieId')->nullable();
            $table->unsignedBigInteger('ReserveringStatusId');
            $table->string('Reserveringsnummer');
            $table->dateTime('Datum');
            $table->integer('AantalUren');
            $table->dateTime('BeginTijd');
            $table->dateTime('EindTijd');
            $table->integer('AantalVolwassen');
            $table->integer('AantalKinderen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_reservering');
    }
};
