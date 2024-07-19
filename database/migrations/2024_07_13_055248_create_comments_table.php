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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('comment')->nullable();
            $table->string('post')->nullable();
            $table->string('status')->nullable();  
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
        Schema::dropIfExists('comments');
    }
};
