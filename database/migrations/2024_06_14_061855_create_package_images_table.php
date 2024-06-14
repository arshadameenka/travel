<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('package_images', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->string('image_file',length:250)->nullable(false);
            $table->string('cation',length:250)->default('');
            $table->enum('category',['gallery','main','user'])->default('gallery');
            $table->enum('verified',['Y','N'])->default('Y');
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_images');
    }
};
