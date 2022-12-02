<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('typeTravel');
            $table->date('dateTravel');
            $table->time('timeTravel');
            $table->double('fareTravel', 4, 2);
            $table->unsignedBigInteger('idDeparture');
            $table->foreign('idDeparture')->references('id')->on('departures')->onDelete('cascade');
            $table->unsignedBigInteger('idArrival');
            $table->foreign('idArrival')->references('id')->on('arrivals')->onDelete('cascade');
            $table->unsignedBigInteger('idBus');
            $table->foreign('idBus')->references('id')->on('buses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('travel');
    }
};
