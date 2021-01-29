<?php

namespace App\Http\Requests\Catalog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductCategoryStoreRequest extends FormRequest
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
            'name' => 'required|max:255|unique:product_categories,name',
            'slug' => 'max:255|unique:product_categories,slug',
            'status' => 'required|boolean',
            'parent_id' => 'sometimes|nullable|exists:product_categories,id',
            'image' => 'image'
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
            'name.required' => 'Введите название категории',
            'name.unique' => 'Категория с таким названием уже существует',
            'slug.unique' => 'Введите уникальное значение',
            'status.required' => 'Статус обязательное поле',
            'status.boolean' => 'Введите корректное значение статуса',
            'parent_id.exists' => 'Выберите категорию из указанных в списке',
            'image.image' => 'Файл должен быть изображением с расширением: jpg, jpeg, png, bmp, gif, svg, webp'
        ];
    }
}
