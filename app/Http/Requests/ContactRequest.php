<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email',
            'subject' => 'required|max:200',
            'message' => 'required|max:3000',
        ];
    }
    public function attributes()
    {
        return [
            'email' => 'E-mail',
            'subject' => 'Konu',
            'message' => 'Mesaj',
        ];
    }
}
