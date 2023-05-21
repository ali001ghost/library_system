<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('file_path');
            $table->string('accepted')->nullable();
            $table->integer('price');
            $table->string('author')->nullable();
            $table->string('review')->nullable();
            $table->integer('pagenumber')->nullable();
            $table->string('rate')->nullable();
            $table->string('image')->nullable();
            $table->integer('amount')->nullable();
            $table->enum('recomended', ['yes', 'no'])->default('no');
            $table->enum('borrowed', ['yes', 'no'])->default('no');
            $table->integer('append')->default(0);
            $table->foreignId('uploader_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('sub_category_id')->constrained('sub_categories')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();











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
