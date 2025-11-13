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
Schema::create('pengalaman', function (Blueprint $table) {
    $table->id();
    $table->foreignId('biodata_id')->constrained('biodata')->onDelete('cascade');
    $table->string('title')->nullable();
    $table->string('organisasi')->nullable();
    $table->date('start_date')->nullable();
    $table->date('end_date')->nullable();
    $table->text('description')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengalaman');
    }
};
