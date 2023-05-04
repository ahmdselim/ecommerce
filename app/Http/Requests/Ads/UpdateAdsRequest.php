<?php

namespace App\Http\Requests\Ads;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdsRequest extends FormRequest
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
            'name_ar' => "nullable|max:100",
            'name_en' => "nullable|max:100",
            'description' => "nullable|min:5",
            'image' => "nullable|file|mimes:jpg,png,svg,jpeg,webp|max:4000",
            'brand_id' => "nullable|exists:brands,id",
            'category_id' => "nullable|exists:categories,id",
            'user_id' => "nullable|exists:users,id",
            "price" => "nullable|numeric",
            "condition" => "nullable|in:new,used",
            "status" => "nullable|in:pindling,accept,reject",

        ];
    }
}
