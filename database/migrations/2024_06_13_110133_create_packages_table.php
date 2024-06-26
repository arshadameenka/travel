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
        Schema::create('packages', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->string('slug')->unique();
            $table->smallInteger('days')->default(1);
            $table->smallInteger('nights')->default(0);
            $table->smallInteger('people')->default(1);
            $table->enum('featured',['Y','N'])->default('N');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
