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
        Schema::create('replay_review_ads', function (Blueprint $table) {
            $table->id();
            $table->foreignId("review_ad_id")->constrained("review_ads", "id")->cascadeOnDelete();
            $table->foreignId("user_id")->constrained("users", "id")->cascadeOnDelete();
            $table->text("comment")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('replay_review_ads');
    }
};
