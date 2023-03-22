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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->bigInteger('cate_id');
            $table->string('judul_lain');
            $table->string('slug');
            $table->string('rating');
            $table->string('image');
            $table->string('deskripsi');
            $table->string('Type');
            $table->string('Chapter');
            $table->string('Status_manga');
            $table->string('Genre');
            $table->string('Views')->default('0');
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('trending')->default('0');
            $table->tinyInteger('popular')->default('0');
            $table->string('rilis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};