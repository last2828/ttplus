<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferStoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'comment' => 'required|string'
        ];
    }

    /**
     * Get the validation error messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Ваше имя - это обязательное поле',
            'email.required' => 'E-mail - это обязательное поле',
            'email.email' => 'Введите действительный e-mail',
            'phone.required' => 'Ваш телефон - это обязательное поле',
            'comment.required' => 'Комментарий - это обязательное поле',
        ];
    }
}
