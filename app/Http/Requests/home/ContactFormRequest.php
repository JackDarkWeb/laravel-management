<?php

namespace App\Http\Requests\home;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'first_name' => ['required', 'max:255', 'string'],
            'last_name'  => ['required', 'max:100', 'string'],
            'email'      => ['required','email', 'max:255'],
            'subject'    => ['required', 'string', 'max:100'],
            'message'    => ['required', 'string']
        ];
    }
}
