<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TagFormRequest extends FormRequest
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
            'title' => 'required',
            'slug' => 'required|unique:categories'
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'Поле найменование обязательно для заполнения.',
            'slug.required'  => 'Поле слог обязательно для заполнения.',
            'slug.unique' => 'Такое значение поля слог уже существует.'
        ];
    }
}
