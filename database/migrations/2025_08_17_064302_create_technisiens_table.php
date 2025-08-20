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
        Schema::create('technisiens', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('technisien_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('description');
            $table->string('category');
           
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technisiens');
    }
};
