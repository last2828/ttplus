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
            'slug' => 'unique:products',
            'attributes.*.value' => 'required',
            'attributes.*.attribute_id' => 'not_in:null',
            'attributes_old.*.value' => 'required',
            'group_id' => 'not_in:null',
            'category_id' => 'not_in:null',
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
            'attributes.*.attribute_id.not_in' => 'Выберите характеристику',
            'attributes_old.*.value.required' => 'Значение не может быть пустым',
            'group_id.not_in' => 'Выберите группу товаров',
            'category_id.not_in' => 'Выберите категорию',
        ];
    }


}
