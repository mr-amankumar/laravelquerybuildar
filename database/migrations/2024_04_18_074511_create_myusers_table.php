<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('myusers', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->string('email')->unique()->nullable();
            $table->integer('age');
            $table->string('city');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('myusers');
    }
};
