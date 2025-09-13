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
        Schema::create('plants_models', function (Blueprint $table) {
            $table->id();
            $table->biginteger("id_tumbuhan");
            $table->string("nama_tumbuhan", 50);
            $table->string("gambar_tumbuhan")->nullable();
            $table->enum("jenis_tumbuhan", ['herbal', 'hias', 'buah']);
            $table->string("warna_tumbuhan");
            $table->text("deskripsi_tumbuhan")->nullable();
            $table->enum("waktu_perkembangan_tumbuhan", ['biji', 'berkecambah', 'Muda', 'Dewasa']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants_models');
    }
};
