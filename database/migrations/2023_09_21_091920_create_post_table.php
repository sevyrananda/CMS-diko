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
        Schema::create('listPost', function (Blueprint $table) {
            $table->id();
            $table->string('gambar'); 
            $table->string('file'); 
            $table->string('judul'); 
            $table->date('tanggal'); 
            $table->string('aksi'); 
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
