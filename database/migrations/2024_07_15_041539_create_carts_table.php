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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_produk');
            $table->integer('quantity')->default(1);
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_produk')->references('id')->on('produks')->onDelete('cascade');

        // $table->id();
        // $table->unsignedBigInteger('id_user'); // Kolom untuk menyimpan ID pengguna
        // $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        // $table->unsignedBigInteger('id_produk'); // Kolom untuk menyimpan ID produk
        // $table->foreign('id_produk')->references('id')->on('produks')->onDelete('cascade');
        // $table->string('name');
        // $table->integer('quantity'); // Kolom untuk menyimpan jumlah produk
        // $table->integer('price'); 
        // $table->string('image');
        // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
