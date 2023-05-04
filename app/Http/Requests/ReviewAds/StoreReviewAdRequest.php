<?php

namespace App\Http\Requests\ReviewAds;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewAdRequest extends FormRequest
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
            'comment' => 'required|max:65000',
            'rating' => 'required|in:0,1,2,3,4,5',
            'ad_id' => "required|exists:ads,id",
            'user_id' => "nullable|exists:users,id"
        ];
    }
}
