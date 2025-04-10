<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $userId = $this->route('user');
        if ($this->isMethod('post')) {

            return [
                'first_name' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                'last_name' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                'mobile' => 'required|digits:11|unique:users',
                'email' => 'required|string|email|unique:users',
                'password' => ['required', 'unique:users', Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised(), 'confirmed'],
                'user_type' => 'required|min:1|max:10000000000000|in:0,1',
                'status' => 'required|numeric|in:0,1',
            ];
        } else {
            return [
                'first_name' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                'last_name' => 'required|min:2|max:255|regex:/^[ا-یa-zA-Zء-ي ]+$/u',
                'mobile' => ['required','digits:11' , Rule::unique('users')->ignore($userId)],
                'user_type' => 'required|min:1|max:10000000000000|in:0,1',
            ];
        }
    }
    public function messages(){
        return [
            'password.confirmed' => 'پسورد ها با مطابقت ندارد'
        ];
    }
}
