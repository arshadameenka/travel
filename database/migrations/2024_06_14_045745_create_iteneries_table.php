<?php

use App\Models\Package;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Language;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('iteneries', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->foreignIdFor(Package::class);
            $table->foreignIdFor(Language::class);
            $table->smallInteger('day');
            $table->text('details');
            $table->string('title',length:250);
            $table->enum('status',['Active','Deleted','Inactive']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iteneries');
    }
};
