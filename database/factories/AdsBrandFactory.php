<?php

namespace Database\Factories;

use App\Models\Ad;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdsBrand>
 */
class AdsBrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ad = Ad::first("id");
        $brand = Brand::first("id");

        return [
            "ad_id" => $ad->id,
            "brand_id" => $brand->id,
        ];
    }
}
