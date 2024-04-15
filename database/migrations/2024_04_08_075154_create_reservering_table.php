<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('reservering', function (Blueprint $table) {
    //         $table->id();
    //         $table->foreignId('persoonId');
    //         $table->foreignId('openingsTijdId');
    //         $table->foreignId('baanId');
    //         $table->foreignId('tariefId');
    //         $table->foreignId('pakketOptieId');
    //         $table->foreignId('reserveringsStatusId');
    //         $table->bigInteger('reserveringsNummer');
    //         $table->date('datum');
    //         $table->integer('aantalUren');
    //         $table->time('beginTijd');
    //         $table->time('eindTijd');
    //         $table->integer('aantalVolwassen');
    //         $table->integer('aantalKinderen')->nullable();
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservering');
    }
};
