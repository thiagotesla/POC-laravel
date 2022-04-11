<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'user_id'=>'required',
            'title'=>'required',
            'pages'=>'required|numeric',
            'price'=>'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'O Autor é obrigatório',
            'title.required' => 'Adicione um título válido',
            'pages.required' => 'Adicione um número de páginas válido.',
            'pages.numeric' => 'Adicione um número de páginas válido.',
            'price.required' => 'Adicione um preço válido.',
            'price.numeric' => 'Adicione um preço válido.',
        ];
    }
}
