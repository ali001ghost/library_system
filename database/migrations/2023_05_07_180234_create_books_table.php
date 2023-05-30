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
            $table->string('author');
            $table->string('review');
            $table->integer('pagenumber');
            $table->string('rate');
            $table->string('image');
            $table->integer('amount');
            $table->enum('recomended', ['yes', 'no'])->default('no');
            $table->enum('borrowed', ['yes', 'no'])->default('no');
            $table->foreignId('uploader_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('sub_category_id')->constrained('sub_categories')->cascadeOnDelete();











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
