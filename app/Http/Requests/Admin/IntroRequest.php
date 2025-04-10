<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class IntroRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'image|mimes:png,jpg,webp,jpeg,gif',
            'title' => 'required|min:2|max:1000|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي., ]+$/u',
            'description' => 'required|min:2|max:1000|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي., ]+$/u',
            'link' => 'required|min:2|max:1000',
        ];
    }
}
