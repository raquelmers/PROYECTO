<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_kuskatans', function (Blueprint $table) {
            $table->id('id');
            $table->string('firstName',25);
            $table->string('lastName',25);
            $table->string('userName',15);
            $table->string('userPasswrd',10);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('user_kuskatans');
    }
};
