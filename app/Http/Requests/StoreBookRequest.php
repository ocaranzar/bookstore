<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class StoreBookRequest extends FormRequest
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
            "cover" => ["required", File::image()],
            "name" => "required|max:50|string|unique:App\Models\Book",
            "pages" => "required|numeric",
            "isbn" => "required|min_digits:10|max_digits:13|numeric",
            "release_date" => "required|date",
            "mediatype" => "required|exists:App\Models\MediaType,id",
            "genre" => "required|exists:App\Models\Genre,id",
            "publisher" => "required|exists:App\Models\Publisher,id",
            "writer" => "required|exists:App\Models\Writer,id",
        ];
    }
}
