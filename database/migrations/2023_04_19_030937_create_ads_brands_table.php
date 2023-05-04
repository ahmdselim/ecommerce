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
        Schema::create('ads_brands', function (Blueprint $table) {
            $table->id();
            $table->foreignId("ad_id")->constrained("ads", "id")->cascadeOnDelete();
            $table->foreignId("brand_id")->constrained("brands", "id")->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads_brands');
    }
};
