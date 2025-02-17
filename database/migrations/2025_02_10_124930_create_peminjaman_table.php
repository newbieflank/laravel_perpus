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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignId('id_buku')->constrained('books')->onDelete('cascade');
            $table->foreignId('id_user')->constrained('members')->onDelete('cascade');
            $table->foreignId('penanggung_jawab')->constrained('users')->onDelete('cascade');
            $table->date('tanggal_pinjam')->useCurrent();
            $table->integer('jumlah_pinjam')->default(1);
            $table->integer('denda')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
