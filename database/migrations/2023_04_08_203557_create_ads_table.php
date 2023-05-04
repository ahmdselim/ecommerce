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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->text("name")->nullable();
            $table->longText("description")->nullable();
            $table->string("image")->nullable();
            $table->foreignId("category_id")->nullable()->constrained("categories", "id")->onDelete("cascade");
            $table->foreignId("user_id")->nullable()->constrained("users", "id")->onDelete("cascade");
            $table->integer("price")->nullable();
            $table->enum("condition", ["new", "used"])->default("new");
            $table->enum("status", ["pindling", "accept", "reject"])->default("reject");
            $table->integer("visitors")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
