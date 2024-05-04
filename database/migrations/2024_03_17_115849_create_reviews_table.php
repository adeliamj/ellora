<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->text('review_text');
            $table->integer('rating')->default(0);
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();

            
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
