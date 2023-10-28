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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->string('author', 255);
            $table->year('year');
            $table->string('publisher', 255);
            $table->string('city', 255);
            $table->string('cover', 255);
            $table->bigInteger('bookshelf_id')->unsigned();
            $table->foreign('bookshelf_id')->references('id')->on('bookshelves');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
