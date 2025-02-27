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
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('village_id')->nullable()->constrained('villages')->onDelete('set null');
            $table->string('nik')->nullable()->unique();
            $table->string('name');
            $table->enum('gender', ['Perempuan', 'Laki - Laki'])->nullable();
            $table->date('birth_date')->nullable();
            $table->string('occupation')->nullable();
            $table->string('status_resident')->nullable();
            $table->string('education_level')->nullable();
            $table->string('photo_profile')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
