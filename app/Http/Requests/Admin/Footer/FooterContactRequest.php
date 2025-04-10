<?php

namespace App\Http\Requests\Admin\Footer;

use Illuminate\Foundation\Http\FormRequest;

class FooterContactRequest extends FormRequest
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
            'phone' => 'required|min:2|max:1000',
            'email' => 'required|min:2|max:1000',
            'address' => 'required|min:2|max:1000',
        ];
    }
}
