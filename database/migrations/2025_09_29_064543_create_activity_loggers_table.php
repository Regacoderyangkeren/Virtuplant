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
        Schema::create('activity_loggers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("User_id")->nullable()->constrained("users")->onDelete("cascade");
            $table->string("role")->nullable();
            $table->string("ip_address")->nullable();
            $table->string("user_agents")->nullable();
            $table->string("url")->nullable(false);
            $table->string("model")->nullable();
            $table->unsignedBigInteger("model_id")->nullable();
            $table->string("action")->nullable();
            $table->json("old_values")->nullable();
            $table->json("new_values")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_loggers');
    }
};
