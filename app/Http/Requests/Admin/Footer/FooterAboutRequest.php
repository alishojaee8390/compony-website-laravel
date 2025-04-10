<?php

namespace App\Http\Requests\Admin\Footer;

use Illuminate\Foundation\Http\FormRequest;

class FooterAboutRequest extends FormRequest
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
            
            'url_instagram' => 'required|min:2|max:1000',
            'url_facebook' => 'required|min:2|max:1000',
            'url_twitter' => 'required|min:2|max:1000',
            'description' => 'required|min:2|max:1000|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي., ]+$/u',
        ];
    }
}
