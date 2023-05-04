<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'image' => "required|file|mimes:jpg,png,svg,jpeg,webp|max:4000",
            'images' => "required",
            'images.*' => "required|file|mimes:jpg,png,svg,jpeg,webp|max:4000",
            'category_id' => "required|exists:categories,id",
            "price" => "required|numeric",
            'description' => "required|min:5",
            "condition" => "required|in:new,used",
            // 'brand_id' => "required|exists:brands,id",
            // 'user_id' => "nullable|exists:users,id",
            // "status" => "nullable|in:pindling,accept,reject",

        ];
    }
}
