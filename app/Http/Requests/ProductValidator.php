<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name' => [
                'required',
                'max:255',
                Rule::unique('products', 'name')->ignore($this->product)
                ],
            'model' => [
                'required',
                'max:255',
                Rule::unique('products', 'model')->ignore($this->product)
            ],
            'slug' => [
                'max:255',
                Rule::unique('products', 'slug')->ignore($this->product)
            ],
            // 'attributes.*.value' => 'required',
            // 'attributes.*.attribute_id' => 'required',
            // 'attributes_old.*.value' => 'required',
            'group_id' => 'required',
            // 'category_id' => 'required',
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
            'slug.unique' => 'Введите уникальное значение',
            'attributes.*.value.required' => 'Значение не может быть пустым',
            'attributes.*.attribute_id.required' => 'Выберите характеристику',
            'attributes_old.*.value.required' => 'Значение не может быть пустым',
            'group_id.required' => 'Выберите группу товаров',
            'category_id.required' => 'Выберите категорию',

        ];
    }


}
