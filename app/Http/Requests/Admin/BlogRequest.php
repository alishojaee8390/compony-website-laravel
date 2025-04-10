<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
                'title' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي.,؟ ]+$/u',
                'description' => 'required|min:2|max:255',
                'image' => 'required|image|mimes:png,jpg,webp,jpeg,gif',
                'subject' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي.,؟ ]+$/u',
                'body' => 'required|min:2|max:255',
                'keywords' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي.,؟ ]+$/u',
                'alt' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي.,؟ ]+$/u',
                'category_id' => 'required|exists:categories,id',
            ];
        } else {
            return [
                'title' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي.,؟ ]+$/u',
                'description' => 'required|min:2|max:255',
                'image' => 'image|mimes:png,jpg,webp,jpeg,gif',
                'subject' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي.,؟ ]+$/u',
                'body' => 'required|min:2|max:255',
                'keywords' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي.,؟ ]+$/u',
                'alt' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ي.,؟ ]+$/u',
                'category_id' => 'required|exists:categories,id',
            ];
        }
    }
}
