<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            'title' => 'required|max:255',
            'slug' => 'max:255|unique:posts, slug',
            'type_id' => 'required|exists:post_types, id',
            'status' => 'required|boolean',
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
            'slug.unique' => 'Введите уникальное значение',
            'type_id.required' => 'Выберите тип записи',
            'type_id.exists' => 'Выберите тип записи из указанных в списке',
            'status.boolean' => 'Введите корректное значение статуса',
            'status.required' => 'Статус обязательное поле'
        ];
    }
}
