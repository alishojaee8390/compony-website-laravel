<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'service_title_1' => 'required|min:2|max:1000|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي., ]+$/u',
            'service_desc_1' => 'required|min:2|max:1000|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي., ]+$/u',
            'service_title_2' => 'required|min:2|max:1000|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي., ]+$/u',
            'service_desc_2' => 'required|min:2|max:1000|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي., ]+$/u',
            'service_title_3' => 'required|min:2|max:1000|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي., ]+$/u',
            'service_desc_3' => 'required|min:2|max:1000|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي., ]+$/u',
            'alt' => 'required|min:2|max:1000|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي., ]+$/u',
        ];
    }
}
