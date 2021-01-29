<?php

namespace App\Http\Requests\Catalog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductCategoryUpdateRequest extends FormRequest
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
                Rule::unique('product_categories', 'name')->ignore($this->product_category)
            ],
            'slug' => [
                'max:255',
                Rule::unique('product_categories', 'slug')->ignore($this->product_category)
            ],
            'parent_id' => [
                'sometimes',
                'nullable',
                'exists:product_categories,id',
                Rule::notIn($this->product_category)
            ],
            'status' => 'required|boolean',
            'image' => 'sometimes|nullable|image'
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
            'status.boolean' => 'Введите корректное значение статуса',
            'status.required' => 'Статус обязательное поле',
            'parent_id.exists' => 'Выберите категорию из указанных в списке',
            'parent_id.not_in' => 'Эта категория не может быть родительской',
            'image.image' => 'Файл должен быть изображением с расширением: jpg, jpeg, png, bmp, gif, svg, webp'
        ];
    }
}
