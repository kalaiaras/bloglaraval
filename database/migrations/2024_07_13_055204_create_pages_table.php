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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('language')->nullable();
            $table->string('parent_link')->nullable();
            $table->string('order')->nullable();
            $table->string('location')->nullable();
            $table->string('visibility')->nullable();
            $table->string('show_title')->nullable();
            $table->string('show_breadcrumb')->nullable();
            $table->string('show_rightcolumn')->nullable();
            $table->string('content')->nullable();
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
        Schema::dropIfExists('pages');
    }
};
