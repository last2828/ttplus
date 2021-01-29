<?php

namespace App\Http\Requests\Catalog;

use Illuminate\Foundation\Http\FormRequest;

class ProductGroupStoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'slug' => 'unique:product_groups,slug',
            'category_id' => 'required|exists:product_categories,id'
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
            'name.required' => 'Введите название группы товаров',
            'slug.unique' => 'Введите уникальное значение',
            'category_id.exists' => 'Выберите категорию из указанных в списке',
            'category_id.required' => 'Выберите категорию из указанных в списке'
        ];
    }
}
