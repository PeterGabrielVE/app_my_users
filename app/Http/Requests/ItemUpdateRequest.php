<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemUpdateRequest extends FormRequest
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
            'name' => 'required|regex:/^[\pL\s\-]+$/u|min:1|max:100',
            'email' => 'required|min:1|max:100',
            'cedula' => 'required|min:1|max:6',
        ];
    }

    public function messages()
    {
        return [
            'name.required'   => 'El :attribute es obligatorio.',
            'name.min'        => 'El :attribute debe contener mas de una letra.',
            'name.max'        => 'El :attribute debe contener max 100 letras.',
            'name.regex'      => 'El :attribute debe contener solo letras.',

            'email.required'  => 'El :attribute es obligatorio',
            'email.min'       => 'El :attribute  debe contener mas de una letra.',
            'email.max'       => 'El :attribute  debe contener max 100 letras.',

            'cedula.required'  => 'La :attribute es obligatorio',
            'cedula.min'       => 'La :attribute  debe contener mas de un caracter.',
            'cedula.max'       => 'La :attribute  debe contener max 6 caracteres.',
        ];
    }

    public function attributes()
    {
        return [
                'name'        => 'nombre de usuario',
                'email'         => 'correo electronico',
                'cedula'        => 'cedula del usuario',
                'cargo'         => 'cargo del usuario',

            ];
    }
}
