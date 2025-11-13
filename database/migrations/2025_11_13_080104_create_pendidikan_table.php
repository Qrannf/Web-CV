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
Schema::create('pendidikan', function (Blueprint $table) {
    $table->id();
    $table->foreignId('biodata_id')->constrained('biodata')->onDelete('cascade');
    $table->string('nama_sekolah')->nullable();
    $table->string('gelar')->nullable();
    $table->year('start_year')->nullable();
    $table->year('end_year')->nullable();
    $table->text('description')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikan');
    }
};
