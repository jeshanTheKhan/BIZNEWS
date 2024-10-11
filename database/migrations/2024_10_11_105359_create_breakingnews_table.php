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
        Schema::create('breakingnews', function (Blueprint $table) {
            $table->id('breakingnews_id');
            $table->string('english_news')->nullable();
            $table->string('english_news_slug')->nullable();
            $table->string('bangla_news')->nullable();
            $table->string('bangla_news_slug')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breakingnews');
    }
};
