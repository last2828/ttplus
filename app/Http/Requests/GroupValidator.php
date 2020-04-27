<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class GroupValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'max:255',
                Rule::unique('products', 'name')->ignore($this->product)
            ],
            'slug' => [
                'max:255',
                Rule::unique('products', 'slug')->ignore($this->product)
            ],

            'category_id' => 'required'
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
            'name.required' => 'Введите название группы',
            'name.unique' => 'Группа с таким названием уже существует',
            'slug.unique' => 'Введите уникальное значение',
            'category_id.required' => 'Выберите категорию для группы',
        ];
    }
}
