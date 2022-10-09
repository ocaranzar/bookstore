<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "first_name" => "required|string|max:25",
            "last_name" => "required|string|max:25",
            "username" =>
                "required|string|max:25|unique:App\Models\User,username," .
                $this->user->id,
            "email" =>
                "required|string|email|max:50|unique:App\Models\User,email," .
                $this->user->id,
        ];
    }
}
