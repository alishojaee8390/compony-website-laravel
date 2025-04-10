<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TopHeaderRequest extends FormRequest
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
            'email' => 'required|min:2|max:255|email',
            'phone' => 'required|min:2|max:255|regex:/^[0-9+]+$/u',
            'url_instagram' => 'required|min:2|max:255',
            'url_facebook' => 'required|min:2|max:255',
            'url_twitter' => 'required|min:2|max:255',
        ];
    }
}
