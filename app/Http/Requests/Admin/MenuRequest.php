<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
                'link' => 'required|min:1|max:1000',
                'title' => 'required|min:2|max:1000|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي., ]+$/u',
            ];
    }
}
