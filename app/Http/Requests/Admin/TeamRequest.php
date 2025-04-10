<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
                    'alt' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                    'image' => 'required|image|mimes:png,jpg,webp,jpeg,gif',
                    'url_instagram' => 'required|min:2|max:255',
                    'url_facebook' => 'required|min:2|max:255',
                    'url_twitter' => 'required|min:2|max:255',
                    'url_linkden' => 'required|min:2|max:255',
                ];
            } else {
                return [
                    'fullName' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                    'job' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                    'alt' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                    'image' => 'image|mimes:png,jpg,webp,jpeg,gif',
                    'url_instagram' => 'required|min:2|max:255',
                    'url_facebook' => 'required|min:2|max:255',
                    'url_twitter' => 'required|min:2|max:255',
                    'url_linkden' => 'required|min:2|max:255',
                ];
            }
    
    }
}
