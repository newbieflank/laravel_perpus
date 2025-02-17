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
        Schema::create('books', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('judul_buku', 100)->index();
            $table->text('deskripsi')->nullable();
            $table->string('pengarang')->index();
            $table->integer('jumlah_buku')->default(0);
            $table->integer('jumlah_di_pinjam')->default(0);
            $table->year('tahun_terbit')->nullable();
            $table->dateTime('tanggal_masuk')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
