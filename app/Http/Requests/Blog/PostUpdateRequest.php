<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostUpdateRequest extends FormRequest
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
            'slug' => [
                'max:255',
                Rule::unique('posts','slug')->ignore($this->post)
            ],
            'type_id' => 'required|exists:post_types,id',
            'status' => 'required|boolean'
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
            'title.required' => 'Введите название записи',
            'slug.unique' => 'Введите уникальное значение',
            'type_id.required' => 'Выберите тип записи',
            'type_id.exists' => 'Выберите тип записи из указанных в списке',
            'status.boolean' => 'Введите корректное значение статуса',
            'status.required' => 'Статус обязательное поле'
        ];
    }
}
