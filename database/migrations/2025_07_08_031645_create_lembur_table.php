<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lembur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');

            $table->date('tanggal');
            $table->string('jam_kerja')->nullable();         // untuk APN
            $table->string('jam_kerja_actual')->nullable();  // untuk Actual
            $table->text('keterangan')->nullable();

            $table->enum('tipe', ['APN', 'Actual']); // <- penanda dari mana form ini berasal

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lembur');
    }
};

