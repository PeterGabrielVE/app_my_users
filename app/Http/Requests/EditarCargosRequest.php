<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarCargosRequest extends FormRequest
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
            'name' => 'required|regex:/^[\pL\s\-]+$/u|max:100',
            'description' => 'required|min:1|max:100',
        ];
    }
    public function messages()
    {
        return [
            'name.required'   => 'El :attribute es obligatorio.',
            'name.min'        => 'El :attribute debe contener mas de una letra.',
            'name.max'        => 'El :attribute debe contener max 100 letras.',
            'name.regex'      => 'El :attribute debe contener solo letras.',
            'description.required'  => 'El :attribute es obligatorio',
            'description.min'       => 'El :attribute  debe contener mas de una letra.',
            'description.max'       => 'El :attribute  debe contener max 100 letras.',
        ];
    }

    public function attributes()
    {
        return [
                'name'        => 'nombre de cargo',
                'description'   => 'descripcion del cargo',

            ];
    }
}
