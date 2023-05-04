<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'department_id' => "required|exists:departments,id"
        ];
    }
}
