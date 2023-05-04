<?php

namespace App\Http\Requests\UserProfile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserProfileRequest extends FormRequest
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
            "fname" => "nullable|min:3|max:100",
            "lname" => "nullable|min:3|max:100",
            "email" => "nullable|email|exists:users,email",
            "image" => "nullable|file|mimes:jpg,png,jpeg,svg,webp|max:4000",
            "phone" => "nullable|min:5|max:30",
            "city" => "nullable|min:5|max:80",
            "state" => "nullable|min:5|max:80",
            "zip" => "nullable|min:2|max:20",
            "country" => "nullable|min:5|max:80",
            "company" => "nullable|min:5|max:150",
            "dateOfBirth" => "nullable|date",
        ];
    }
}
