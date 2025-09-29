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
        Schema::create('plants', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name', 50);
            $table->string('picture')->nullable();
            $table->enum('type', ['herbal', 'decorative', 'fruitable']);
            $table->string("color");
            $table->text("description")->nullable();
            $table->enum("plant_state", ['seed', 'sprout', 'young', 'mature', 'dead']);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};