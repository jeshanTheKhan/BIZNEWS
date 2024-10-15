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
        Schema::create('news', function (Blueprint $table) {
            $table->id('news_id');
            $table->string('english_title')->nullable();
            $table->string('english_title_slug')->nullable();
            $table->string('bangla_title')->nullable();
            $table->string('bangla_title_slug')->nullable();
            $table->string('one_subtitle_english')->nullable();
            $table->string('one_subtitle_bangla')->nullable();
            $table->string('two_subtitle_english')->nullable();
            $table->string('two_subtitle_bangla')->nullable();
            $table->string('news_category');
            $table->string('date');
            $table->string('one_english_description')->nullable();
            $table->string('one_bangla_description')->nullable();
            $table->string('two_english_description')->nullable();
            $table->string('two_bangla_description')->nullable();
            $table->string('three_english_description')->nullable();
            $table->string('three_bangla_description')->nullable();
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->integer('hero')->nullable();
            $table->integer('category')->nullable();
            $table->integer('feather')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
