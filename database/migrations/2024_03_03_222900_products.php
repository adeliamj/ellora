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
        Schema::create('products', function (Blueprint $table) {
            $table->string('kode', 50)->primary();
            $table->string('nama', 255);
            $table->text('deskripsi');
            $table->decimal('harga');
            $table->string('ukuran', 50);
            $table->string('bahan', 100);
            $table->text('perawatan');
            $table->text('shopee')->nullable();
            $table->text('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};