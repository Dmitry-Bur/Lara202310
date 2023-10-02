<?php

namespace App\Http\Requests\posts;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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

            'title' => 'required|string|min:3|max:30',
            'description' => 'required|string|min:10|max:300',
            'category_id' => 'required|integer'
        ];
    }
}
