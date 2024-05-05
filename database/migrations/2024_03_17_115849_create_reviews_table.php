<?php

// database/migrations/create_reviews_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id')->references('id')->on('users')->constrained()->onDelete('cascade');
            // $table->string('product_kode', 50)->references('kode')->on('products')->constrained()->onDelete('cascade');
            $table->text('review_text');
            $table->integer('rating')->default(0);
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
