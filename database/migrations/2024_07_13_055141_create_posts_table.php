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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('add_slider')->nullable();
            $table->string('add_ourpics')->nullable();
            $table->string('showusers')->nullable();
            $table->string('tags')->nullable();      
            $table->string('url')->nullable();
            $table->string('content')->nullable();
            $table->string('status')->nullable();             
            $table->string('image')->nullable();      
            $table->string('image_url')->nullable();
            $table->string('additional_images')->nullable();
            $table->string('files')->nullable();
            $table->string('category')->nullable();
            $table->string('subcategory')->nullable();
            $table->timestamp('created_at')->useCurrent(); 
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('deleted_at')->useCurrent(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
