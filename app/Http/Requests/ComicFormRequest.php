<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:100',
            'author' => 'required|max:100',
            'genre' => 'required|max:50',
            'description' => 'required|min:5|max:100',
            'price' => 'required|numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo title deve essere compilato',
            'title.min' => 'Il campo title deve avere minimo 3 caratteri',
            'author.required' => 'Il campo author deve essere compilato',
            'genre.required' => 'Il campo genre deve essere compilato',
            'description.required' => 'Il campo description deve essere compilato',
            'description.min' => 'Il campo description deve avere minimo 5 caratteri',
            'price.required' => 'Il campo price deve essere compilato',
            'price.numeric' => 'Il campo price deve essere un numero',
            'price.min' => 'Il campo price non può essere un numero negativo',
        ];
    }
}
