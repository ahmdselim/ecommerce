<?php

namespace App\Http\Requests\Ads;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name_ar' => "required|max:100",
            'name_en' => "required|max:100",
            'description' => "required|min:5",
            'image' => "required|file|mimes:jpg,png,svg,jpeg,webp|max:4000",
            "images" => "required",
            'images.*' => "file|mimes:jpg,png,svg,jpeg,webp|max:4000",
            'brand_id' => "required|exists:brands,id",
            'category_id' => "required|exists:categories,id",
            'user_id' => "nullable|exists:users,id",
            "price" => "required|numeric",
            "condition" => "required|in:new,used",
            "status" => "nullable|in:pindling,accept,reject",
        ];
    }
}
