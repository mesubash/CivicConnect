<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->id('complain_id');
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('category')->nullable();
            $table->text('problem')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('complains');
    }
};
