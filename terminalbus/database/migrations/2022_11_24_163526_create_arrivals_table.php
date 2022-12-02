<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('arrivals', function (Blueprint $table) {
            $table->id();
            $table->string('arrivalPlace',50);
            $table->string('arrivalAddress',100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('arrivals');
    }
};
