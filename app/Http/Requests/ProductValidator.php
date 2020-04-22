<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductValidator extends FormRequest
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
            'name' => 'required|unique:products|max:255',
            'model' => 'required|unique:products|max:255',
            'slug' => 'required|unique:products'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Введите название товара',
            'name.unique' => 'Товар с таким названием уже существует',
            'model.required' => 'Введите код товара',
            'model.unique' => '"Код товара"" должен быть уникальным',
            'slug.required' => 'На русском нельзя'
        ];
    }


}
