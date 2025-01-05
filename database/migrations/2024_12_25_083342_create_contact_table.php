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
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',500);
            $table->string('email',500);
            $table->string('phone',500);
            $table->string('subject', 1000)->nullable();
            $table->string('message', 10000)->nullable();
            $table->string('ip')->nullable();            
            $table->boolean('status')->default(0);
           
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
