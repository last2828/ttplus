<?php

namespace App\Http\Requests\Catalog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductStoreRequest extends FormRequest
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
            'name' => 'required|max:255|unique:products,name',
            'model' => 'required|max:255|unique:products,model',
            'slug' => 'max:255|unique:products,slug',
            'attributes.*.value' => 'required',
            'attributes.*.attribute_id' => 'required|exists:product_attributes,id',
            'attributes_old.*.value' => 'required',
            'category_id' => 'required|exists:product_categories,id',
            'group_id' => 'sometimes|nullable|exists:product_groups,id',
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
            'name.required' => 'Введите название товара',
            'name.unique' => 'Товар с таким названием уже существует',
            'model.required' => 'Введите код товара',
            'model.unique' => 'Код товара должен быть уникальным',
            'slug.unique' => 'Введите уникальное значение',
            'attributes.*.value.required' => 'Значение не может быть пустым',
            'attributes.*.attribute_id.required' => 'Выберите характеристику',
            'attributes.*.attribute_id.exists' => 'Выберите характеристику из указанных в списке',
            'attributes_old.*.value.required' => 'Значение не может быть пустым',
            'category_id.required' => 'Выберите категорию товаров',
            'category_id.exists' => 'Выберите категорию из указанных в списке',
            'group_id.exists' => 'Выберите группу товара из указанных в списке',
            'status.boolean' => 'Введите корректное значение статуса',
            'status.required' => 'Статус обязательное поле',
            'image.image' => 'Файл должен быть изображением с расширением: jpg, jpeg, png, bmp, gif, svg, webp'
        ];
    }
}
