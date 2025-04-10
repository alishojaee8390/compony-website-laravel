<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
        
        if ($this->isMethod('post')) {
            return [
                'fullName' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                'job' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                'description' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                'alt' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                'image' => 'required|image|mimes:png,jpg,webp,jpeg,gif',
            ];
        } else {
            return [
                'fullName' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                'job' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                'description' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                'alt' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                'image' => 'image|mimes:png,jpg,webp,jpeg,gif',
            
            ];
        }
    }
}
