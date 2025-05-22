<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id'); // auto-increment, large int unsigned
            $table->string('name', 255);
            $table->timestamps(); // created_at en updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
};