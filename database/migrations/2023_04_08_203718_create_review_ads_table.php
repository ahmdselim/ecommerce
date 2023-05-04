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
        Schema::create('review_ads', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->nullable()->constrained("users", "id")->onDelete("cascade");
            $table->foreignId("ad_id")->nullable()->constrained("ads", "id")->onDelete("cascade");
            $table->text("comment")->nullable();
            $table->enum("rating", [0, 1, 2, 3, 4, 5])->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_ads');
    }
};
