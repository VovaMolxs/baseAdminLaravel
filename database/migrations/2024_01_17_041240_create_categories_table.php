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
        Schema::create('categories', function (Blueprint $table) {
          $table->id();
          $table->string('categories');
          $table->string('title')->nullable();
          $table->string('long_title')->nullable();
          $table->string('slug')->unique();
          $table->text('category_detail')->nullable();
          $table->unsignedInteger('parent_id')->default(1)->nullable();
          $table->boolean('menu')->default(1);
          $table->boolean('featured')->default(0);
          $table->string('cat_image')->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
